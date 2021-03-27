<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => 'Konan',
            'texto' => 'foi uma kunoichi de Amegakure e um membro da Akatsuki. Ela foi uma parceira de Nagato, e foi o único membro a chamá-lo pelo nome. Após a morte de Nagato, ela desertou da organização e se tornou o líder de Amegakure antes de sua própria morte.Konan era inteligente, estóica, calma e sangue-frio (muito parecida com o que seu parceiro, Nagato, foi). Quando criança, ela era brilhante, compassiva, e relativamente alegre, em comparação com a atitude dura de Yahiko e a sensibilidade de Nagato. No entanto, os eventos traumáticos, desde então, a levou a tornar-se uma pessoa muito séria, e ela nunca mais falou durante as reuniões da Akatsuki. No entanto, ela sempre colocou a segurança de seus companheiros de equipe acima dela. Quando era mais jovem Konan mostrou sentimentos românticos para Yahiko, cuidando dele e querendo estar o mais próximo possível dele,[3] mas não se sabe se esses sentimentos foram realizados durante a vida adulta ou permaneceram após a morte de Yahiko.',
            'criado_em'=> Carbon::parse("2021-03-26"),
            'imagem' => 'imagens/RkIdQReOrnSQy9yGK24mFgLpc22KZ47Ne5abjQ8m.jpg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Monkey D. Luffy',
            'texto' => 'também conhecido como "Luffy do Chapéu de Palha" ou "Chapéu de Palha", é um pirata e o protagonista do anime e mangá One Piece. Ele é o fundador e o capitão do cada vez mais infame e poderoso Piratas do Chapéu de Palha, bem como um de seus quatro principais lutadores. Seu sonho de vida é se tornar o Rei dos Piratas, encontrando o lendário tesouro deixado pelo falecido Rei dos Piratas, Gol D. Roger. Ele acredita que ser o Rei dos Piratas significa ter a maior liberdade do mundo. Após sua invasão em Totto Land e suas ações contra a Yonkou Big Mom, ele é atualmente considerado pela imprensa global como o Quinto Imperador.[30]
                Ele é o filho do líder Revolucionário Monkey D. Dragon, neto paterno do herói da Marinha Monkey D. Garp, irmão jurado do falecido "Punhos de Fogo" Portgas D. Ace e do chefe de gabinete Revolucionário Sabo, e o filho adotivo de Curly Dadan.',
            'criado_em'=> Carbon::parse("2021-03-26"),
            'imagem' => 'imagens/HPUmIWu0KSFhnSmlzlavoD8WbbUAU7vwpKsqM4Ru.jpg',
        ]);

        DB::table('posts')->insert([
            'titulo' => 'Marcio Da Silva Santos',
            'texto' => 'Marcio é formado em Analise e desenvolvimento de sistemas e atulamente esta cursando Sistemas de Informação, ele é apaixonado por programação e pra ele não existe a melhor tecnologia ou Linguagem de programação, ele acredita que cada tecnologia consegue atingir seus propositos e que so depende do que se quer fazer. e suas outras grandes paixões são os animes e games.',
            'criado_em'=> Carbon::parse("2021-03-26"),
            'imagem' => 'imagens/Gf8Oi0ZRVgQ5gRZRaIaR0xKaOMJnZBEMQazseKOD.jpg.jpg',
        ]);
    }
}
