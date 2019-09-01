<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: database/seeds/CategoriesTableSeeder.php
| Camada: Model
| Descrição: Define registros que serão criados visando popular a tabela
| de categorias (categories) para realização de testes no sistema
| Última atualização: 01/09/2019
*/

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {

      // factory('App\Models\Category', 4)->create();

      App\Category::create([
          'name' => 'roupas e calçados',
          'description' => 'Nesta categoria estão incluídos, entre outros: blusas, camisas, calças, camisetas, vestidos, saias, shorts, coletes, ternos, paletós, casacos, meias, cuecas, calcinhas, camisolas, pijamas, sapatos, tênis, botas, chinelos, sandálias, tamancos, etc.'
      ]);

      App\Category::create([
          'name' => 'produtos para pets',
          'description' => 'Nesta categoria estão incluídos, entre outros: rações para cães e gatos, petiscos, biscoitos, bifinhos, suplementos vitamínicos, comedouros, bebedouros, areia para gatos, brinquedos, shampoos, caixas transportadoras, camas, vermífugos, vacinas, antipulgas e carrapatos, produtos de limpeza, tapetes higiênicos, sabonetes, higienizadores, pasta dental, cortadores de unhas, coleiras, guias e peitorais, etc.'
      ]);

      App\Category::create([
          'name' => 'audio',
          'description' => 'Nesta categoria estão incluídos, entre outros: aparelhos de som, rádios portáteis, rádio-relógio, gravadores digitais, fones de ouvido, caixas de som, mini-systems, som automotivo, mp3 e mp4 players, etc.'
      ]);

      App\Category::create([
          'name' => 'papelaria / material de escritório',
          'description' => 'Nesta categoria estão incluídos, entre outros: cadernos, grampeadores, lápis, canetas esferográficas, lapiseiras, etiquetas adesivas, borrachas, papel sulfite, pastas de arquivos, apontadores, grafites para lapiseiras, perfuradores de papel, rotuladores, durex, clipes, carimbos, corretivos em fita e em líquido, lápis de cor, tesoura escolar, colas em líquido ou bastão, réguas, compassos, tintas acrílicas ou guache, fichários universitários, cadernetas, calculadoras, carbonos, giz, grampos, estiletes, cartolinas, isopor, elásticos, extratores de grampos, fitas para calculadoras, almofadas para carimbos, apagadores, pistolas de cola quente, pranchetas, etc.'
      ]);

      App\Category::create([
          'name' => 'móveis e decoração',
          'description' => 'Nesta categoria estão incluídos, entre outros: sofás, poltronas, estantes e gabinetes, mesas (de canto, de centro), cadeiras, armários, guarda-roupas, prateleiras, cômodas, criado-mudo, colçhões, camas (de solteiro e de casal), cabeceiras, sala de jantar, sala de estar, tapetes, cortinas, quadros, espelhos, móveis de cozinha, armários para banheiros, etc.'
      ]);

      App\Category::create([
          'name' => 'material de limpeza',
          'description' => 'Nesta categoria estão incluídos, entre outros: desinfetantes, água sanitária, detergentes, desengordurantes, luvas de borracha, baldes, esponjas, sabão em pó, álcool, limpa vidros, lustra móveis, palhas de aço, rodos, pás de lixo, vassouras, sacos de lixo, amaciantes, sabão em pó liquido, panos, escovas, papel-toalha, frascos com borrifador, sapólios, sabão em barra, limpadores multiuso, tira-manchas, alvejantes, etc.'
      ]);

      App\Category::create([
          'name' => 'material de higiene pessoal',
          'description' => 'Nesta categoria estão incluídos, entre outros: sabonetes, shampoos, pasta-de-dentes, desodorantes, condicionadores para o cabelo, fio dental, esponja para banho, enxaguantes bucais, cremes de barbear, aparelhos de barbear, talco para os pés e para o corpo, cremes para as mãos e os pés, etc.'
      ]);

      App\Category::create([
          'name' => 'livros e filmes',
          'description' => 'Nesta categoria estão incluídos, todos os tipos de livros (didáticos, de literatura, técnicos, de biografias, etc), dicionários, enciclopédias, videoaulas e filmes em DVD.'
      ]);

      App\Category::create([
          'name' => 'informática',
          'description' => 'Nesta categoria estão incluídos, entre outros: mouses, teclados, pen-drives, computadores, notebooks, tablets, impressoras, scanners, roteadores, monitores, hds externos, memórias, placas-mãe, no-breaks, etc.'
      ]);

      App\Category::create([
          'name' => 'brinquedos e games',
          'description' => 'Nesta categoria estão incluídos, entre outros: videogames, bolas, bonecas e bonecos, jogos e brinquedos educativos, autoramas, ferroramas, jogos de tabuleiro (dama, dominó, xadrez), bicicletas para crianças, velocípedes, patins, patinetes, quebra-cabeças, blocos de montar, bichos de pelúcia, massinhas de modelar, brinquedos para bebês, instrumentos musicais infantis, skates, brinquedos de controle remoto, etc.'
      ]);

      App\Category::create([
          'name' => 'eletroportáteis',
          'description' => 'Eletroportáteis são produtos que precisam ser ligados à eletricidade (ou utilizam baterias recarregáveis) para funcionar, mas que, diferentemente dos eletrodomésticos (como fogão, geladeira, máquina de lavar e secadoras, que são bem maiores e pesados), podem ser transportados de um lugar para outro com facilidade. Nesta categoria estão incluídos, entre outros: liquidificadores, batedeiras, cafeteiras, torradeiras elétricas, panelas elétricas, centrífugas e espremedores de frutas, purificadores de água, pipoqueiras, processadores de alimentos, aspiradores de pó, enceiradeiras, ferros de passar roupas, mixers, etc.'
      ]);

      App\Category::create([
          'name' => 'eletrodomésticos',
          'description' => 'Nesta categoria estão incluídos, entre outros: geladeiras/refrigeradores, freezers, fogões, forno de micro-ondas, fornos de embutir, coifas, máquinas de lavar roupas, secadoras de roupas, lavadoras de louças, etc.'
      ]);

      App\Category::create([
          'name' => "TV's e vídeos",
          'description' => "Nesta categoria estão incluídos, entre outros: TV's de led, TV's 4k, smart TV, conversores digitais, home-theater, DVDs e blu-ray players, acessórios para TV, etc."
      ]);

      App\Category::create([
          'name' => 'câmeras e filmadoras',
          'description' => 'Nesta categoria estão incluídos, entre outros: câmeras digitais, filmadoras, câmeras instantâneas, câmeras de ação, binóculos, telescópios, etc.'
      ]);

      App\Category::create([
          'name' => 'beleza e perfumaria',
          'description' => 'Nesta categoria estão incluídos, entre outros: perfumes masculinos e femininos, cosméticos, produtos para maquiagem, desodorantes, cremes para a pele, loção pós-barba, aparelhos de barbear descartáveis, modeladores, secadores de cabelo, barbeadores elétricos, chapinhas e pranchas, máquinas de cortar cabelo, escovas rotativas, etc.'
      ]);

     App\Category::create([
          'name' => 'celulares e telefonia',
          'description' => 'Nesta categoria estão incluidos, entre outros: todos os tipos de aparelhos celulares e smartphones, aparelhos telefônicos digitais fixos, telefones sem fio, acessórios para celulares, etc.'
      ]);

      App\Category::create([
          'name' => 'alimentação e bebidas',
          'description' => 'Nesta categoria estão incluídos, entre outros: frutas, verduras, legumes, alimentos orgânicos, enlatados, congelados, condimentos e conservas, sopas e cremes, massas, laticínios (leites, queijos, manteigas, iogurtes), carnes, peixes, sucos, refrigerantes, cafés, chás, pães, açúcar, farinhas e grãos, ovos, bomboniere, pizzas, etc.'
      ]);

  }
}
