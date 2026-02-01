<?php
namespace HolaMundoMultilenguaje;

class Saludo {
    private $saludos;

    public function __construct() {
        $this->saludos = [
            "es" => ["saludo" => "¡Hola Mundo!", "codigo" => "ES"],
            "zh" => ["saludo" => "你好，世界！", "codigo" => "CN"],
            "en" => ["saludo" => "Hello, World!", "codigo" => "US"],
            "hi" => ["saludo" => "नमस्ते दुनिया!", "codigo" => "IN"],
            "ar" => ["saludo" => "مرحبا بالعالم!", "codigo" => "AR"],
            "pt" => ["saludo" => "Olá Mundo!", "codigo" => "PT"],
            "ru" => ["saludo" => "Привет, мир!", "codigo" => "RU"],
            "ja" => ["saludo" => "こんにちは、世界！", "codigo" => "JP"],
            "de" => ["saludo" => "Hallo Welt!", "codigo" => "DE"],
            "fr" => ["saludo" => "Bonjour le monde!", "codigo" => "FR"],
        ];
    }

    public function generarSaludoAleatorio() {
        $indice = array_rand($this->saludos);
        return $this->saludos[$indice];
    }
}
