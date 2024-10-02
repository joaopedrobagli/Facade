<?php

// Subsistema de Vídeo
class SistemaVideo {
    public function carregarVideo($nomeArquivo) {
        echo "Carregando vídeo: " . $nomeArquivo . "\n";
    }

    public function reproduzirVideo() {
        echo "Reproduzindo vídeo...\n";
    }
}

// Subsistema de Áudio
class SistemaAudio {
    public function carregarAudio($nomeArquivo) {
        echo "Carregando áudio: " . $nomeArquivo . "\n";
    }

    public function reproduzirAudio() {
        echo "Reproduzindo áudio...\n";
    }
}

// Subsistema de Imagem
class SistemaImagem {
    public function carregarImagem($nomeArquivo) {
        echo "Carregando imagem: " . $nomeArquivo . "\n";
    }

    public function exibirImagem() {
        echo "Exibindo imagem...\n";
    }
}

// Classe Facade
class MediaFacade {
    private $video;
    private $audio;
    private $imagem;

    public function __construct() {
        $this->video = new SistemaVideo();
        $this->audio = new SistemaAudio();
        $this->imagem = new SistemaImagem();
    }

    public function reproduzirVideo($nomeArquivo) {
        $this->video->carregarVideo($nomeArquivo);
        $this->video->reproduzirVideo();
    }

    public function reproduzirAudio($nomeArquivo) {
        $this->audio->carregarAudio($nomeArquivo);
        $this->audio->reproduzirAudio();
    }

    public function exibirImagem($nomeArquivo) {
        $this->imagem->carregarImagem($nomeArquivo);
        $this->imagem->exibirImagem();
    }
}

// Cliente utilizando a Facade
class Cliente {
    public function executar() {
        $mediaFacade = new MediaFacade();

        // Reproduzir um vídeo
        $mediaFacade->reproduzirVideo("video.mp4");

        // Reproduzir um áudio
        $mediaFacade->reproduzirAudio("musica.mp3");

        // Exibir uma imagem
        $mediaFacade->exibirImagem("foto.jpg");
    }
}

// Executando o código
$cliente = new Cliente();
$cliente->executar();

?>
