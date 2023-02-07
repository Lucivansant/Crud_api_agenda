<?php

class Api
{
    public static function GET()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:7000/v1/Recuperar_registros',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 'GET'

        ]);

        $response = curl_exec($curl);
        return $response;

        curl_close($curl);
    }
    public static function POST($nome, $email, $numero, $descri)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:7000/v1/Adicionar_registros',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 'POST',
            CURLOPT_POSTFIELDS => [
                'nome' => $nome,
                'email' => $email,
                'numero' => $numero,
                'desc' => $descri
            ]
        ]);

        $response = curl_exec($curl);
        return $response;

        curl_close($curl);
    }
    public static function PUT($num, $id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost:7000/v1/Atualizar_registros",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 'POST',
            CURLOPT_POSTFIELDS => [
                'new_number' => $num,
                'id' => $id
            ]


        ]);

        $response = curl_exec($curl);
        return $response;

        curl_close($curl);
    }

    public static function DELETE($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "http://localhost:7000/v1/Deletar_registros",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 'POST',
            CURLOPT_POSTFIELDS => [
                'delete' => $id
            ]


        ]);

        $response = curl_exec($curl);
        return $response;

        curl_close($curl);
    }
}
