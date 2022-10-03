<?php
session_start();

class filmManager{
    private $film;
    private $voto;
    private $voti;
    private $numeriDopoVirgola=2;

    public function inserireVoto($film, $voto)
    {
        $this->voto = $voto;
        $this->film = $film;
        $this->insertJson();
    }


    private function insertJson()
    {
    
    $votiJson= $this->caricaVotiFromJson();
    
    foreach ($votiJson as $key => $film ) {
        if ($film['film'] === $this->film) {
            $voti=$film['voti'] +1;
            $voto=$film['voto'] +$this->voto;
            $provaMedia=$voto/$voti;
            $media=ceil($provaMedia);

            $votiJson[$key] = [
            'film' => $this->film,
            'voto' => $voto,
            'voti' => $voti,
            'media' => $media,

        ];
            file_put_contents('voti.json', json_encode($votiJson));
            
            return ;        
    }}

    $votiJson[] = [
        'film' => $this->film,
        'voto' => $this->voto,
        'voti' => 1,
        'media' => $this->voto,
    ];
    file_put_contents('voti.json', json_encode($votiJson));
    }


    public static function caricaVotiFromJson()
    {
    $content = file_get_contents('voti.json');
    $votiJson = json_decode($content, true);
        if ($votiJson === null) {
        echo 'Impossibile leggere il file carrello: ' . json_last_error_msg();
        die;
        }
    
    return $votiJson;
    }
}

?>
