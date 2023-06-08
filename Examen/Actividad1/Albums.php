<?php
    class Albums {
        protected $nombreArtista;
        protected $nombreAlbum;

        //Constructor
        function __construct($nombreArtista, $nombreAlbum) {
            $this -> nombreArtista = $nombreArtista;
            $this -> nombreAlbum = $nombreAlbum;
        }

        //Muestra el nombre del artista
        public function getArtistName() {
            echo "Nombre del Artista: " . $this -> nombreArtista;
        }

        //Muestra el nombre del album
        public function getCompany() {
            echo "<br/>Nombre del album: " . $this -> nombreAlbum;
        }
    }

    $album = new Albums('Cristian Fernandez', 'Sin ti');
    $album -> getArtistName();
    $album -> getCompany();
?>