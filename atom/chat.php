<?php
// Mostrar errores de PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$mensaje = $data['mensaje'] ?? '';

if (!$mensaje) {
  echo json_encode(['respuesta' => 'No recibí ninguna pregunta.']);
  exit;
}

// 🔐 Leer la clave desde el archivo .env
$env = parse_ini_file(__DIR__ . '/.env');
$apiKey = $env['OPENAI_API_KEY'] ?? '';

if (!$apiKey) {
  echo json_encode(['respuesta' => 'No se encontró la clave de API.']);
  exit;
}

// 🧠 Leer el contenido de las dos páginas
$urls = [
  'http://localhost/atom/atom/cursos.php',
  'http://localhost/atom/atom/cursob-i.php'
];

$contenidoTotal = '';

foreach ($urls as $url) {
  $html = @file_get_contents($url);
  if ($html !== false) {
    $contenido = strip_tags($html);
    $contenidoTotal .= $contenido . "\n\n";
  } else {
    $contenidoTotal .= "No se pudo cargar el contenido de: $url\n";
  }
}

// ✂️ Limita el texto para evitar pasarte de tokens (máx ~3500 tokens)
$contenidoTotal = substr($contenidoTotal, 0, 9000);

// 🎯 Prompt con contexto personalizado
$prompt = "Eres un asistente experto en un curso de SolidWorks. Usa únicamente la siguiente información extraída del sitio para responder preguntas relacionadas con el curso. Si la pregunta no está relacionada, responde amablemente que no puedes ayudar.\n\n" . $contenidoTotal;

$messages = [
  ["role" => "system", "content" => $prompt],
  ["role" => "user", "content" => $mensaje]
];

$curl = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Bearer ' . $apiKey
]);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
  "model" => "gpt-3.5-turbo",
  "messages" => $messages,
  "max_tokens" => 200,
  "temperature" => 0.6
]));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

// Guarda la respuesta para depurar
file_put_contents('respuesta_debug.txt', $response);

if ($err) {
  echo json_encode(['respuesta' => 'Error en la conexión a OpenAI: ' . $err]);
  exit;
}

$result = json_decode($response, true);

if (isset($result['error'])) {
  echo json_encode(['respuesta' => 'Error de OpenAI: ' . $result['error']['message']]);
  exit;
}

if (isset($result['choices'][0]['message']['content'])) {
  echo json_encode(['respuesta' => trim($result['choices'][0]['message']['content'])]);
} else {
  echo json_encode(['respuesta' => 'No obtuve respuesta de OpenAI.']);
}
?>
