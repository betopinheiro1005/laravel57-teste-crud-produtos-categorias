<?php

/*
|--------------------------------------------------------------------------
| Teste Spot Promo - CRUD de produtos e categorias
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: database/seeds/ProductsTableSeeder.php
| Camada: Model
| Descrição: Define registros que serão criados visando popular a tabela
| de produtos (products) para realização de testes no sistema
| Última atualização: 01/09/2019
*/

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
      App\Product::create([
          'name' 		=> 'Lavadora de Roupas Electrolux 13 kg Alta Capacidade LT13B - Branca',
          'code_prod'   => '4168904',
          'description' => 'A rotina agitada do dia a dia, seja no trabalho, seja nos afazeres com a família, diminuem o tempo livre de cada um. Quem acaba saindo prejudicado é você e as suas roupas, muitas vezes lavadas às pressas e sem o devido cuidado. Felizmente isso está com os dias contados caso você adquira a lavadora de roupas LT13B. Desenvolvida pela Electrolux, ela possui funcionalidades que facilitarão um trabalho muito demorado anteriormente. Com capacidade de lidar com até 13 quilos de peças de uma só vez, ela se destaca por economizar tempo, espaço, água, energia e consumo em produtos de limpeza. Robusta, ela também é capaz de lavar edredons de casal. E para manter tudo em perfeito estado, seu filtro pega fiapos, presente no agitador, fica responsável por reter os fiapos que antes ficavam presos a sua roupa logo após a lavagem.',
          'category_id' => 12
      ]);

      App\Product::create([
          'name'    => 'Liquidificador Britânia B1000 com 12 Velocidades e 1000W - Preto',
          'code_prod'   => '11439333',
          'description' => 'Equipamentos modernos e versáteis fazem toda a diferença na cozinha, ainda mais se apresentarem recursos avançados que nos permitem ir além nas receitas. Nesses casos, a gente deve aproveitar as facilidades e ter esses eletroportáteis sempre à mão. É o caso do liquidificador Britânia B1000, que torna-se o seu braço direito definitivo nos preparos de sucos, vitaminas, sopas, tortas, bolos, pães, entre outros, trazendo a praticidade que você sempre sonhou. Com 12 velocidades + Função Pulsar, não há nada mais ágil e eficiente do que esse aparelho para fazer com que suas misturas fiquem sempre homogêneas e cremosas. A Função Ice e suas lâminas afiadas trituram os alimentos mais duros, inclusive gelo. Com 1000W de potência, o liquidificador Britânia B1000 tem todas as condições de elaborar os mais variados pratos, levando excelência para o seu dia a dia!',
          'category_id' => 11
      ]);

      App\Product::create([
          'name' 		=> 'Refrigerador Electrolux Duplex DC35A 260L - Branco',
          'code_prod'   => '1743666',
          'description' => 'É fato que o Electrolux DC35A consegue gelar e oferecer muito espaço para que você consiga armazenar toda a comida e a bebida. Mas o refrigerador também se destaca pelos diversos recursos práticos que oferece e com os quais consegue facilitar o dia de qualquer um. Com vários tipos de compartimentos, o produto deixa você organizar os alimentos da maneira que mais gosta, aproveitando o porta-latas, o porta-ovos ou o gavetão para frutas e vegetais. As prateleiras removíveis podem ter sua altura regulada, facilitando muito a limpeza e a acomodação dos alimentos. O trava-garrafas mantém as bebidas fixas à porta, evitando acidentes com líquidos derramados. A iluminação permite visualizar tudo com muita facilidade. Deixe sua cozinha bem mais decorada com o design futurista desse refrigerador. Seu o freezer é potente e traz 53 litros de espaço, o suficiente para congelar muita coisa!',
          'category_id' => 12
      ]);

      App\Product::create([
          'name' 		=> 'Notebook Dell Core i3-6006U 4GB 1TB Tela 15.6” Windows 10 Inspiron I15-3567-A10P',
          'code_prod'   => '12585181',
          'description' => 'Projetado para promover mais eficiência no desenvolvimento do trabalho de seu dia a dia, o Notebook Dell Inspiron I15-3567-A10P é um modelo acessível e de excelente custo-benefício, que oferece mais versatilidade para aplicar a computação nas tarefas diárias, buscando atender às suas necessidades e otimizar seu potencial. Com tela de 15.6 polegadas e excelente configuração, o I15-3567-A10P vai dar o suporte necessário para você desenvolver as suas atividades acadêmicas, profissionais e também de entretenimento.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name'    => 'Filmadora Sony Hxrmc2500 Avchd Full Hd',
          'code_prod'   => '1500043458',
          'description' => 'A filmadora sony hxrmc2500 avchd é projetada para videomakers que procuram a estabilidade inerente e profissional . Ela apresenta um chip de exmor r cmos de 1/4 que pode trabalhar com tão pouco como 0,8 lux de iluminação quando em modo sd, e desempenho de pouca luz é ainda mais com um led luz de 800 lumens de 1, 6. ',
          'category_id' => 14
      ]);

      App\Product::create([
          'name' 		=> 'Sofá 4 lugares Linoforte Versalhes com assento retrátil e encosto reclinável em tecido Suede',
          'code_prod'   => '9095762',
          'description' => 'Não é maravilhoso poder relaxar em um sofá superconfortável e, ainda, desfrutar de ótimas companhias nestes momentos? Assistir a um filme, fazer uma maratona de séries, ou jogar videogame pode ser ainda mais relaxante e divertido quando se está acomodado no Sofá 4 Lugares Linoforte Versalhes. Ele conta com um design moderno, que transforma sua sala em um ambiente muito sofisticado. Além disso, sua estrutura é confeccionada em material de qualidade indiscutível, com sistemas flexíveis, almofadas fixas e pés que oferecem mais estabilidade. Com 94 cm de altura, 232 cm de largura, 124 cm de comprimento, quando aberto, e 94 cm de comprimento, quando fechado, este móvel dispõe de assento para receber de maneira aconchegante quatro pessoas sentadas. Vem com assento retrátil e encosto reclinável, garantindo mais comodidade aos usuários.',
          'category_id' => 5
      ]);

      App\Product::create([
          'name' 		=> 'Smart TV LED 49" Ultra HD 4K LG 49UK6310PSE com IPS, Inteligência Artificial ThinQ AI, WI-FI, Processador Quad Core, HDR 10 Pro, HDMI e USB',
          'code_prod'   => '13196242',
          'description' => 'A Smart TV LG UK6310PSE é o futuro da definição de imagem! Mesmo em uma programação de baixa resolução com o Upscaler 4K você terá a máxima qualidade de imagem. Falando nisso, é muito melhor assistir seus filmes favoritos com a tecnologia HDR Ativo, ela proporciona qualidade de brilho e contraste superior, imagens realistas como você nunca viu. Com alta definição de imagem Ultra HD 4K você irá perceber um nível incrível de detalhes e mesmo assistindo de perto em uma sala pequena terá o melhor ângulo de visão e a qualidade máxima de todos os conteúdos exibidos. Com a Smart TV LG 49UK6310PSE você terá muito mais praticidade na hora de assistir TV, busque seus conteúdos e informações através de comandos de voz, a tecnologia LG Inteligência Artificial ThinQ AI* é o futuro e evolução da categoria Smart, basta você falar e conseguirá controlar sua TV sem complicações com reconhecimento de voz. E não é só isso, com a plataforma WebOS a LG oferece o menu Smart mais intuitivo, com diversas funções e melhorias para você ter uma navegação ainda mais rápida. Tudo isso, em um design Ultra Slim e acabamento superior que levará elegância e sofisticação ao ambiente. E não é só isso, já pensou em ter uma experiência sonora mais envolvente? Com o DTS Virtual: X é possível ter na sua sala uma simulação tridimensional, sua programação terá todos os efeitos e máxima entrega de áudio. Ainda se quiser conectar um dispositivo como fone de ouvido ou até mesmo uma Sound Bar use a função LG Sound Sync, é perfeita para instalação sem fios através do Bluetooth. Sua sala mais organizada e moderna!',
          'category_id' => 13
      ]);

      App\Product::create([
          'name' 		=> 'Fogão Brastemp 5 bocas BFS5NCRUNA com botões removíveis - Inox',
          'code_prod'   => '12731636',
          'description' => 'Com design elegante e moderno, o Fogão Brastemp 5 Bocas BFS5NCRUNA é perfeito para ajudar no preparo das refeições de toda a família, pois oferece praticidade e agilidade por meio de suas funções especiais. Com acendimento automático, o fogão possui 3 queimadores rápidos e 2 queimadores semirrápidos, tornando o preparo das refeições ainda mais ágil. Os botões removíveis e a mesa compartimentada de aço escovado facilitam o momento da limpeza. Para sua praticidade, o eletrodoméstico conta com vidro removível, que pode ser retirado com as duas mãos. Além disso, vem com forno com capacidade de 96 litros e duas prateleiras deslizantes.',
          'category_id' => 12
      ]);

      App\Product::create([
          'name'    => 'Gravador de voz digital Sony Icd-px470 4gb MP3',
          'code_prod'   => '12639386',
          'description' => 'Grave sons e vozes com uma nitidez superior. O ICD-PX470 inclui a gravação no modo Focagem e Estéreo panorâmico, para que possa concentrar-se na fonte de áudio que pretende captar. Com uma memória interna de 4 GB, expansível até 32 GB através da ranhura para cartão microSD, pode gravar durante dias. Memória interna de 4 GB, expansível até 32 GB com cartão microSd. O sistema de microfone S regista nitidamente sons distantes ou suaves. A gravação no modo Focagem e Estéreo panorâmico capta as vozes que pretende ouvir. A gravação de voz automática reduz o ruído de fundo. O conector USB incorporado facilita a transferência de ficheiros',
          'category_id' => 3
      ]);

      App\Product::create([
          'name' 		=> 'Impressora Multifuncional HP Deskjet Ink Advantage 2676 Colorida Wireless - Bivolt',
          'code_prod'   => '13919113',
          'description' => 'Com a impressora multifuncional da HP você terá as melhores impressões, pois oferece uma excelente resolução de 1200 x 1200 dp. A Deskjet Ink Advantage 2676 possui compatibilidade com diversos tipos e modelos de smartphones e tablets, facilitam a configuração a partir do seu dispositivo móvel, basta conectar e imprimir. Essa multifuncional HP vem com funções de impressão, digitalização e cópia, é colorida e sua tecnologia de impressão jato de tinta permite que você imprima com qualidade profissional.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name' 		=> 'Poltrona Reclinável American Comfort Halley',
          'code_prod'   => '4101',
          'description' => 'Nada vale mais do que o descanso no fim do dia ou fim de semana. Com a poltrona reclinável da Halley você terá muito mais conforto para ler livros, jornais, tirar uma soneca ou assistir TV. Fabricada pela American Comfort, essa poltrona foi desenvolvida com madeira mista imunizada e é sustentada por percintas de borracha com grampos de arame de aço, sem enferrujar. Além de linda, ela dura uma vida inteira! Descanse os braços nos apoios da poltrona e ajuste a reclinação para obter ainda mais conforto na hora de tirar uma pestana.',
          'category_id' => 5
      ]);

      App\Product::create([
          'name' 		=> 'Caderno Universitário Foroni Art Studio 10 matérias 30.8011-0 – 200 Folhas',
          'code_prod'   => '3848492',
          'description' => 'O Caderno Universitário Foroni Art Studio 10 Matérias 30.8011-0 – 200 Folhas é a opção ideal para quem está retornando às aulas. Ele contém 200 folhas, divididas em 10 matérias, acabamento em espiral e uma art incrível em sua capa.',
          'category_id' => 4
      ]);

      App\Product::create([
          'name'    => 'Ferro a Vapor Black and Decker AJ3030 com spray – Verde',
          'code_prod'   => '13341527',
          'description' => 'Passe suas roupas com facilidade, rapidez e eficiência com o Ferro a Vapor Black and Decker AJ3030 com Spray. Ele possui a base com revestimento Ceramic Gliss, que desliza suavemente e evita o excesso de brilho em tecidos delicados. O ferro pode passar no sistema a seco e ao vapor. O Vapor Vertical permite tirar pequenos amassados das roupas direto do cabide, muito mais praticidade no seu dia a dia e otimiza seu tempo. Você tem autonomia para passar suas roupas e escolher o tipo de tecido, a intensidade de vapor, além disso, possui ponta afunilada, ideal para melhor alcance em áreas com botões e golas e também poupa botões em toda lateral do ferro. Perfeito para todos os tipos de tecidos e roupas. Passa de forma segura, rápida e sem danificar os tecidos.',
          'category_id' => 11
      ]);

      App\Product::create([
          'name'    => 'Desinfetante para uso geral Lavanda Pisos frasco 450ml',
          'code_prod'   => '15320666',
          'description' => 'Desinfetante para Uso Geral Lavanda Omo Pisos Frasco 450ml. Ingredientes: Princípio ativo: cloreto de benzalcônio 0,75%. Princípio ativo, tensoativo não-iônico (álcool graxo etoxilado), agentes de controle de ph, fragrância, corantes e água. Ideal para limpar os pisos da sua casa e outras grandes e pequenas superfícies que sujam no dia a dia.',
          'category_id' => 6
      ]);
      App\Product::create([
          'name' 		=> 'Caneta hidrográfica 24 cores vai e vem 150124VVZF Faber Castell BT 1 UN',
          'code_prod'   => '191082',
          'description' => 'A caneta hidrográfica Faber Castell possui sistema exclusivo que protege a ponta contra impactos, garantindo maior durabilidade. Estimule a criatividade com cores vivas e tinta lavável ',
          'category_id' => 4
      ]);

      App\Product::create([
          'name'    => 'Refeição frango desfiado com salsa Liofoods',
          'code_prod'   => '14217751',
          'description' => 'Prato rápido liofilizado sabor frango desfiado com salsa que serve até 2 porções. De sabor caseiro, é fácil de preparar. Basta adicionar água quente e em 5 minutos está pronto. Não necessita de refrigeração. Saiba mais sobre o processo de liofilização: Na liofilização, o produto é congelado abaixo de -30C, e submetido a uma pressão muito baixa (alto vácuo), fazendo com que a água dos alimentos que foi transformada em gelo seja sublimada, ou seja, passará diretamente do estado sólido para o gasoso, resultando num produto final com estrutura porosa livre de umidade. Os produtos liofilizados têm suas propriedades originais mantidas - forma, cor, aroma e sabor - e quando conservados adequadamente, mesmo à temperatura ambiente, resistem intactos por muitos anos. Desta forma, obtêm-se produtos da mais alta qualidade, de reconstituição instantânea e que possuem longa vida de prateleira, apesar de a legislação brasileira permitir dois anos de validade. Outro efeito importante é a diminuição de peso e volume, além da possibilidade de manusear alimentos que, naturalmente, são perecíveis, sem necessidade de refrigeração, facilitando operações logísticas de armazenamento, transporte e distribuição. Informações gerais: Sabor: Frango desfiado com salsa Rendimento: 2 porções Peso: 80g Tempo de preparo: 5 minutos',
          'category_id' => 17
      ]);

      App\Product::create([
          'name' 		=> 'HD externo 2tb usb portátil Expansion STEA200040 Seagate CX 1 UN',
          'code_prod'   => '229895',
          'description' => 'Ele é muito fácil de usar, é só transferir suas músicas, vídeos, documentos e fotos via cabo USB, não precisa de uma software de instalação. Você ainda faz tudo isso com plena velocidade, pois a conexão USB é 3.0.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name'    => 'Mini System 450W Bluetooth CD USB SC-AKX220LBK - Panasonic',
          'code_prod'   => '1500374514',
          'description' => 'Quer fazer sua festa bombar? Conheça o Mini System SC-AKX220LBK da Panasonic. Compacto e recheado de recursos, o aparelho tem as conexões Bluetooth e Wireless, assim você ganha controle total sobre o equipamento, fazendo suas playlists por meio dos smartphones, escutando músicas diretamente do You Tube. Além disso, graças as essas conexões, é possível conectar o mini system à uma TV Panasonic, totalmente sem fio. Por meio da função, D.Bass, os sons graves convencionalmente são controlados para compatibilizar com o volume do som. Só este recurso, detecta todas as características da música que está sendo executada e destaca as frequências altas.',
          'category_id' => 3
      ]);

      App\Product::create([
          'name' 		=> 'Papel sulfite Chamex azul A4 75g 210mmx297mm Ipaper PT 500 FL',
          'code_prod'   => '474102',
          'description' => 'Chamex Colors é feito com fibras virgens de eucalipto e 100% de florestas replantadas e renováveis, sua pigmentação especial é o que resulta em um papel colorido de qualidade e garante a diversão. Em casa, na escola ou mesmo no escritório, colorido é muito mais divertido!',
          'category_id' => 4
      ]);

      App\Product::create([
          'name' 		=> 'Celular Lenoxx CX 904 Dual Chip - Rádio FM Bluetooth',
          'code_prod'   => '153082400',
          'description' => 'O celular Lenoxx CX 904 Dual Chip 2G é prático e perfeito para você. Possui câmera traseira VGA, rádio FM e bluetooth, te dando um leque de opções impressionantes. E o melhor é que ele é desbloqueado para todas as operadoras. Possui tela de 1,8 polegadas e você ainda conta com uma maior duração de bateria.',
          'category_id' => 16
      ]);

      App\Product::create([
          'name' 		=> 'Scanner de mesa Epson V370 colorido - 4800dpi',
          'code_prod'   => '210399400',
          'description' => 'Elevado desempenho, baixo consumo de energia. Praticamente sem tempo de aquecimento, você começa a digitalizar sem demoras fotografias e documentos. Depois experimente a grande qualidade de imagem graças à tecnologia LED Epson ReadyScan. Também irá reduzir a sua conta de eletricidade, já que o Epson Perfection V370 Photo tem um baixo consumo de energético. Digitalizações de formatos maiores Fotografias maiores podem facilmente ser unidas de forma a criar uma imagem panorâmica. Com o software de stitching (somente compatível com Windows), que permite unir de forma adequada imagens maiores que o padrão A4. Restaure e recupere as suas fotografias, slides e negativos serão devolvidos ao seu estado original. Recupere a cor, remova as partículas de poeira e corrija o contraste com o software Epson Easy Photo Fix. Design flexível. Digitalize em orientação vertical ou horizontal. Até poderá digitalizar livros ou objetos 3D graças ao seu design de dobradiças extensíveis. Através de um botões de atalho, é muito mais simples digitalizar documentos de várias páginas, gerar arquivos PDF pesquisáveis e escanear diretamente para e-mail.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name' 		=> 'Smart TV LED 50” Sony KDL-50W665F Full HD - Wi-Fi HDR 2 HDMI 2 USB',
          'code_prod'   => '193396600',
          'description' => 'A Smart TV LED Full HD KDL-50W665F de 50" da Sony reproduz a emoção dos programas e filmes em HDR. Ela é compatível com uma variedade de formatos HDR, incluindo HDR10 e Hybrid Log-Gamma. Possui sistema operacional Linux, conta com Wi-Fi integrado, 2 entradas HDMI e 2 USB. A tela é enquadrada com uma borda fina e estreita que maximiza a área de visão. Seu efeito em alumínio oferece à TV uma aparência elegante e refinada.',
          'category_id' => 13
      ]);

      App\Product::create([
          'name'    => 'Camisa Social Masculina Jeans - 326',
          'code_prod'   => '13321565',
          'description' => 'A camisa é uma peça super versátil e prática. Além de compor looks sociais, ela funciona sozinha ou sobreposta a uma camiseta, deixando o visual mais despojado.',
          'category_id' => 1
      ]);

      App\Product::create([
          'name'    => 'Grampeador Semi-Automático Paperpro Stack Master 100 Capacidade 100 Folhas',
          'code_prod'   => '6720888',
          'description' => 'Grampeador Semi-Automático PaperPro Stack Master 100  capacidade 100 folhas Grampeador com tecnologia Power Touch, mecanismo de pressão de mola, corpo construido em metal e base emborrachada que grampea até 100 folhas, base, triho e batente construido em metal cromado, cabeça com ângulo reto.',
          'category_id' => 4
      ]);

      App\Product::create([
          'name'    => 'Ração Mini Indoor Adult - 7,5 Kg - Royal Canin',
          'code_prod'   => '1897581',
          'description' => 'Para adultos de porte pequeno que vivem em ambientes internos de 10 meses a 8 anos de idade. Os cães mini não são todos iguais, assim, o universo mini size health nutrition é suficientemente amplo para responder perfeitamente às necessidades e estilo de vida de cada um deles. Mini indoor adult supre as necessidades nutricionais de cães de tamanho pequeno que vivem em ambientes internos durante a fase adulta (peso entre 1 a 10 kg), desde os 10 meses até 8 anos de idade. Redução do volume e odor das fezes: Contribui para reduzir o volume e odor das fezes. Alta digestibilidade: Proporciona uma ótima digestão graças à sua formulação contendo proteínas altamente digestíveis (LIP). Manutenção do peso: Preserva o peso ideal dos cães pequenos por atender perfeitamente suas necessidades energéticas elevadas e favorecer a mobilização das reservas de gorduras pela L-carnitina. Saúde Dental: A forma e a textura do croquete estimulam a mastigação, ajudando a limitar o depósito da placa dentária. Contém tripolifosfato de sódio, benéfico à saúde dentária.',
          'category_id' => 2
      ]);

      App\Product::create([
          'name' 		=> 'Tablet Samsung Galaxy Tab A 7.0” 4G',
          'code_prod'   => 'hb4jackhd4',
          'description' => 'Curvas finas e suaves em todos os cantos garantem uma sofisticação moderna enquanto um padrão rítmico na parte traseira complementa o Galaxy Tab A (7.0 2016) com um toque suave confortável e seguro. O perfil incrivelmente fino do Galaxy Tab A (7.0 2016) juntamente com sua ampla autonomia de bateria é tão leve e compacto que pode ser levado para qualquer lugar com facilidade e estilo. Capture fotos reais de cada momento especial com a rápida e sofisticada câmera do Galaxy Tab A (7.0 2016). É possível salvar imagens panorâmicas nítidas na vertical ou horizontal e até mesmo criar um GIF animado usando o recurso de disparo. O Galaxy Tab A (7.0 2016) exige menos recargas ao longo do dia e oferece amplo espaço de armazenamento. Agora você pode desfrutar do seu conteúdo por mais tempo e otimizar sua experiência de trabalho e entretenimento. O Kids Mode 4.0 foi otimizado para manter seus filhos entretidos com áreas maiores de desenho e melhores efeitos de som. Ele também oferece a você um controle permitindo que bloqueie aplicativos e defina tempos de uso. Carregue suas estações de rádio favoritas onde você for. O Hybrid Radio combina transmissões on-line e FM permite que você crie suas próprias rádios favoritas e até mesmo grave trechos de rádio para compartilhar com amigos.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name' 		=> 'Guarda-roupa casal, 3 portas de correr Madesa - City 1056-1E com espelho',
          'code_prod'   => '218670000',
          'description' => 'Com os móveis da Madesa sua casa vai ficar mais bonita e organizada. Isso porque ele tem beleza e qualidade em só produto. Com sistema de montagem de parafusos, cavilha e minifix, possui material em MDP e três portas de correr. Que são ideais para quem precisa de organização porém não tem muito espaço. Tem acabamento fosco e espelho na porta do meio. E tudo isso com material ecologicamente correto que garantem a beleza e qualidade do produto. Leve agora esse guarda-roupa e tenha o melhor da Madesa na sua casa.',
          'category_id' => 5
      ]);

      App\Product::create([
          'name' 		=> 'Micro-ondas Brastemp BMS45 CRANA - 32L Inox',
          'code_prod'   => '011356800',
          'description' => 'Micro-ondas BMS45CR 32 litros da Brastemp. Funcional e prático, este modelo possui painel Integrado, que dão um toque de elegância e modernidade à sua cozinha. isso sem contar nas funções, com o Menu Descongelar você ganha tempo em diversas receitas. Detalhes fazem a diferença. O Painel Integrado com Display LCD espelhado da Brastemp traz modernidade e sofisticação para a sua cozinha. E para preparar até os pratos mais delicados, basta ajustar o nível de Potência.',
          'category_id' => 12
      ]);

      App\Product::create([
          'name' 		=> 'Boneco bebê Reborn David molde importado autêntico - Baby dolls',
          'code_prod'   => 'ab1654b7h6',
          'description' => 'Com pigmentação avermelhada de frio e manchinhas rochas de prematuro espalhadas por todo o corpo até parece um bebê de verdade. Diversas veias simulam a realidade de ter uma vida, possui exclusiva sobrancelha pintada em 3D, seu cabelinho são implantados fio a fio por um micro agulha proporcionando a nossa boneca a sua realidade. Têm peso e tamanho de bebê, rostinho, pezinhos, mãozinhas e membros cheios de dobrinhas e corpo todo em vinil tudo muito realístico. Uma arte impressionante muito linda e fofa para brincar ou colecionar.',
          'category_id' => 10
      ]);

      App\Product::create([
          'name'    => 'Kit Liquido Tira Manchas 750Ml com 2 Unidades',
          'code_prod'   => '15320673',
          'description' => 'Chega de esfregar roupas na mão ou deixá-las de molho por horas. Com OMO Tira Manchas é possível tirar mancha de roupa direto na máquina - assim você pode reduzir o tempo e esforço que gasta aolavar suas roupas. Seja para tarefas como clarear roupa branca ou tirar mancha de roupa colorida,conte com a linha de OMO Tira Manchas para facilitar o dia a dia da sua lavanderia.',
          'category_id' => 6
      ]);

      App\Product::create([
          'name'    => 'Vestido longo feminino Ombro a Ombro, detalhe em aplicação de metal',
          'code_prod'   => '14082801',
          'description' => 'Vestido midi, ombro a ombro, com aplicação. Composiçao: 65% Poliester, 32% Viscose, 3% Elastano. CUIDE BEM DO SEU PRODUTO: Não lavar a seco. Não remover manchas com solventes. Chapa da base do ferro com temperatura máxima de 150ºC. Temperatura máxima de lavagem 40ºC. Não pode ser seca em máquina. Não usar alvejamento a base de cloro',
          'category_id' => 1
      ]);

      App\Product::create([
          'name' 		=> 'Perfume ferrari black masculino, eau de toilette 125ml ferrari',
          'code_prod'   => '670997600',
          'description' => 'Scuderia Ferrari Black Eau de Toilette Perfume Masculino - 125ML Perfume masculino para o homem moderno que gosta de mostrar seu poder. Ferrari Black é uma perfume com uma fixação mediana, perfeita para o homem que gosta de curtir os melhores momentos da vida, sem perder aquele toque de privacidade. O contágio com as outras pessoas é inevitável, já que a alegria que emana de Black, de Ferrari, conta com uma fragrância com toques cítricos é arrebatadora. O homem misterioso e sensual, em sua essência mais pura. Irresistível!',
          'category_id' => 15
      ]);

      App\Product::create([
          'name' 		=> 'Roteador Wireless Tp-link TL-WR940N 450mbps - 3 antenas, 5 portas',
          'code_prod'   => '217924000',
          'description' => 'O Roteador Wireless TL-WR940N 450Mbps é um dispositivo combinado de conexão de rede cabeada/wireless projetado especificamente para requisitos de rede doméstica, escritórios e pequenos negócios. Com Tecnologia MIMO, o TL-WR940N oferece um desempenho wireless avançado e excepcional, tornando-o ideal para streaming de vídeo, VoIP e jogos online. No mais, o botão WPS em seu elegante exterior garante criptografias WPA2, protegendo a rede contra invasões. Cumprindo com o padrão IEEE 802.11n, o TL-WR940N pode estabelecer uma rede wireless e obter até 18X a velocidade e 6X a gama de produtos convencionais 11g. Além disso, com taxas de transmissão de até 450Mbps, ele mostra habilidades excelentes ao atenuar a perda de dados em longas distâncias e através de obstáculos em um pequeno escritório ou grande apartamento, mesmo em um edifício de aço e concreto. Acima de tudo, você pode facilmente pegar a rede wireless durante a conexão de longa distância onde os produtos 11g não podem. O roteador tem a velocidade para trabalhar sem problemas com quase qualquer aplicação intensiva de largura de banda, incluindo VoIP, HD streaming ou jogos online, sem atrasos. Usando sua poderosa tecnologia N, o roteador também é capaz de reduzir a perda de dados em longas distâncias e através de obstáculos transformando sua casa e até mesmo seu quintal em um grande hotspot.',
          'category_id' => 9
      ]);

      App\Product::create([
          'name' 		=> 'Fita adesiva dupla face 5mm X 10 metros 3M Fita 4905',
          'code_prod'   => 'bc24afkhhe',
          'description' => 'As fitas VHB são ideais para utilização em muitas aplicações industriais interiores e exteriores. Em muitas situações elas podem substituir rebites, soldas a ponto, adesivos líquidos e outros fixadores mecânicos ou permanentes. Cada uma das fitas VHB possuem características únicas. Elas podem possuir alta tensão de ruptura, alta resistência ao cisalhamento, alta adesividade, excelente resistência a solventes, umidade e plastificantes, aprovação no U.L., baixo outgassing, liners plásticos, conformabilidade e adesivos que podem ser aplicados em temperaturas tão baixas quanto 0ºC . As fitas VHB são ideais para a união de vários tipos de superfícies que incluem a maioria dos metais, madeira envernizada ou tratada com primer, vidro (em alguns casos tratados com primer ), grande variedade de plásticos, compósitos e superfícies pintadas. Aplicações sugeridas Montagem de gabinetes para armários e quadros de força telefônicos, fixação de canaletas de PVC, vidros de segurança, placas de identificação, displays, materiais de comunicação visual. Fixação de placas e plaquetas de identificação interna Vedação em tampa de vidro em freezer Fixação de canaletas de fiação e conectores',
          'category_id' => 4
      ]);

      App\Product::create([
          'name'    => 'Câmera Hero 7 Black Chdhx-701-Lw',
          'code_prod'   => '15042612',
          'description' => "Fotos e vídeos tão uniformes que vão te deixar de queixo caído. Superpoderes de captura inteligente. Resistente e à prova d'água sem a caixa. Conheça a Hero 7 Black, a mais completa de todos os tempos. Com a estabilização HyperSmooth (UltraUniforme), vai parecer que você fez seus vídeos com gimbal. Um novo e inteligente modo de foto cria automaticamente as melhores e mais brilhantes imagens. E agora, com transmissão ao vivo e o App, é possível compartilhar momentos sensacionais enquanto eles acontecem. A Hero7 Black eleva o desempenho da (e das suas fotos e vídeos) a um nível mais avançado.",
          'category_id' => 14
      ]);

      App\Product::create([
          'name'    => 'Livro - Meu Primeiro Dicionário Ilustrado de Inglês',
          'code_prod'   => '12238922',
          'description' => "Destinado aos alunos dos primeiros anos do ensino fundamental e também para cursos de língua inglesa, o 'Meu Primeiro Dicionário Ilustrado de Inglês' apresenta mais de 1.600 palavras em inglês, com suas formas morfológicas, tradução para o português, além de aplicação em frases e ilustrações. Além disso, traz um apêndice com falsos cognatos e diversas expressões. Meses do ano, dias da semana e estações climáticas também estão presentes.",
          'category_id' => 8
      ]);

      App\Product::create([
          'name' 		=> 'Caminha Box Pet para cachorros e gatos + lençol impermeável - Bf',
          'code_prod'   => '500106700',
          'description' => 'A Cama BF Pet é uma cama box especial para seu amigo de quatro patas. Com materiais de alta qualidade a caminha é super resistente, e deixa o cantinho do seu melhor amigo com um toque de sofisticação. O Colchão para pet tem tecido lateral preto trabalhado com costuras transversais, detalhe de tecido bordado da marca. Tecido superior bordado e acabamento com costura reforçada nas laterais. Acompanha um lençol 100% impermeável.',
          'category_id' => 2
      ]);

      App\Product::create([
          'name'    => 'Shampoo Yves Rocher Cuidado Vegetal purificante cabelo oleoso 300ml',
          'code_prod'   => '29623573',
          'description' => 'Este shampoo purifica o couro cabeludo e limita a produção de sebo, para que o cabelo se mantenha limpo por mais tempo. Previne que o cabelo fique oleoso rapidamente. A sua textura em gel e o aroma refrescante oferecem de imediato uma sensação de limpeza duradoura. 0% parabenos, 0% silicone e 0% corantes.',
          'category_id' => 7
      ]);

      App\Product::create([
          'name' 		=> 'Livro Soros - O investidor mais influente do mundo - Empiricus books',
          'code_prod'   => 'ba68a36k24',
          'description' => 'Além do conceito de reflexividade, de uma intuição refinada e da maior profundidade intelectual, Soros transmite uma postura admirável: ele não quer estar certo, quer ganhar dinheiro. Robert Slater colocou de pé uma biografia verdadeiramente brilhante: a união de uma grande história de vida com uma impressionante capacidade de escrita e articulação. Para o investidor, o livro traz importantes lições para lidar com o dia a dia do mercado. Para o apaixonado por boas leituras, mostra o funcionamento da mente de um grande pensador',
          'category_id' => 8
      ]);

      App\Product::create([
          'name' 		=> 'Playstation 4 Pro 1TB 1 Controle Sony - Headset',
          'code_prod'   => '043077600',
          'description' => 'O PS4 Pro da Sony deixa o seu jogo mais perto de você. Os mundos dos jogos ganham vida.Ele tem 1TB de capacidade e ainda acompanha 1 controle Dualshock 4 e 1 headset mono.Intensifique suas experiências e eleve o nível das suas aventuras com gráficos incríveis para explorar mundos cheios de vida em jogos com gráficos ainda mais detalhados.Jogue online com outros usuários do PS4 com o PlayStation Plus.',
          'category_id' => 10
      ]);

      App\Product::create([
          'name' 		=> 'Tênis Under Armour Charged Rebel SA masculino',
          'code_prod'   => 'febae350ae',
          'description' => 'A Under Armour chegou ao Brasil há poucos anos, mas trouxe na bagagem todo o conhecimento tecnológico obtido ao longo de mais de duas décadas investindo pesado em melhorias de seus produtos. E com o tênis performance Under Armour Charged Rebel SA não foi diferente. Esse calçado masculino reúne diferenciais exclusivos da marca que são responsáveis por uma corrida muito mais eficiente. A principal delas é a sua tecnologia Charged Cushioning®. Essa inovação apresenta uma entressola em duas camada, sendo mais firme abaixo do calcanhar e mais macia na região do antepé, proporcionando amortecimento e suporte em cada passada. E na parte interior, a palmilha Micro G também auxilia no amortecimento, pois se adapta ao formato do pé, deixando o calce mais anatômico. Seguindo para o solado desse running Under Armour, essa parte do Charged Rebel SA é construída com ranhuras flexíveis, visando garantir o máximo em tração para minimizar a possibilidade de perda de aderência, além de ser em borracha de mais durabilidade. Indicado para corredores de pisada neutra, o Charged Rebel SA foi pensando para ser um tênis performance Under Armour eficiente para corridas e com preço mais acessível.',
          'category_id' => 1
      ]);

      App\Product::create([
          'name'    => 'Smartphone Motorola One XT1941 preto 64GB Tela de 5,9", câmera traseira dupla, processador Octa-Core e 4GB de RAM',
          'code_prod'   => '13737066',
          'description' => 'Equipado com o Android One, uma versão pura e original do sistema operacional móvel mais famoso do mercado, desenvolvido pela Google. Trata-se do mesmo Android que já conhecemos, porém, sua interface é mais limpa, somente com apps básicos e nada mais, livre daquele monte de apps normalmente inúteis, para otimizar a usabilidade e garantir que o usuário tenha uma experiência mais fluída possível, além de receber atualizações mais rápidas e garantida por pelo menos dois anos. Mergulhe em uma experiência imersiva na Tela Max Vision de 5,9 polegadas HD+ com a extraordinária proporção 19:9. Seu design sofisticado e com bordas arredondadas faz o smartphone ser totalmente envolvido pela tela e perfeito para segurar com uma única mão. Para selfies, o smartphone Motorola One tem uma câmera de 8 megapixels, e seguindo a tendência do mercado, câmera dupla na traseira. Seus avançados recursos são um caso a parte. Vale destacar o modo retrato, que desfoca o fundo da foto, o cinemagraph, que congela parte da imagem e mantém o resto em loop e o P&B seletivo, que cria novas imagens adicionando efeito preto e branco em suas fotos coloridas, colocando as pessoas ou objetos em destaque. Além disso, ele conta também com inteligência artificial para identificar textos e objetos, entre outras possibilidades, graças ao Google Lens. Precisou do celular mas a bateria já está no limite, não se preocupe, com o TurboPower você tem carregamento de alta velocidade, que garante em apenas 20 minutos de carga uma autonomia de 6 horas de bateria. O Motorola One vem embarcado de muita tecnologia, um aparelho de design moderno e desenvolvido com as principais inovações em Inteligência Artificial do Google e Moto Experiências, que chega para simplificar a vida do usuário. Novo motorola one. Você pronto.',
          'category_id' => 16
      ]);

      App\Product::create([
          'name' 		=> 'Kit com três camisas Polo Piquet Regular Fit - POLO Match',
          'code_prod'   => 'daj9bfd762',
          'description' => 'Camisa Polo, é praticamente um clássico que não pode faltar no vestuário Masculino, podendo ser usado como estilo casual e chique para diversas ocasiões, além disso é o tipo de peça que nunca sai de moda. A Polo é aquele modelo que te deixa pronto para sair sem precisar pensar muito na roupa, de forma rápida, prática e confortável, você consegue um visual com estilo e elegância de acordo com a ocasião. Pode ser combinada facilmente com bermudas, shorts e calças jeans.',
          'category_id' => 1
      ]);

      App\Product::create([
          'name'    => 'Secador de cabelo portátil bivolt compacto viagem - Vermelho',
          'code_prod'   => '143605189',
          'description' => 'Com bocal direcionador, possibilita mais agilidade e conforto para qualquer tipo de penteado. Deixe sua imaginação entrar em cena e crie infinitas possibilidades. Bivolt automático com cabo dobrável, proporciona muito mais praticidade para levar em viagens. Com 2 velocidades, seus cabelos irão secar e modelar muito mais rápido e ficar ainda mais macios, sedosos e cheios de brilho.',
          'category_id' => 15
      ]);

      App\Product::create([
          'name'    => 'Livro - Minha Primeira Enciclopédia',
          'code_prod'   => '14576393',
          'description' => 'Minha Primeira Enciclopédia. Tudo o que você sempre quis saber agora explicado de forma fácil e divertida. Da descoberta da Antártica ao funcionamento da eletricidade este livro traz um mundo de informações ilustradas para consultar e aprender. Ciência e Tecnologia; Corpo Humano; Animais; História; Artes.',
          'category_id' => 8
      ]);

      App\Product::create([
          'name' 		=> 'Bota Montaria, feminina, cano longo com fivela, salto médio Khaata Café',
          'code_prod'   => 'gf0j7ah045',
          'description' => 'A nossa Bota Montaria Feminina Cano Longo C/ Fivela Salto Médio Khaata Café é a peça indispensável para aqueles que querem ter estilo sem abrir mão do conforto. Nossos produtos são de alta qualidade e oferecem elegância, amabilidade, praticidade e o principal, conforto e maciez. Modelo: Bota montaria Detalhes: Liso com detalhes laterais em diamante Cor: Café Solado: Em borracha ultra resistente Observação: cano longo, salto baixo',
          'category_id' => 1
      ]);

      App\Product::create([
          'name'    => 'iPhone XR 64GB Preto Tela 6.1” iOS 12 4G 12MP - Apple',
          'code_prod'   => '134346517',
          'description' => 'Tecnologia de ponta com iPhone XR da Apple, este smartphone vai modificar por completo a forma como você interage com mundo, oferecendo muito mais facilidades para o seu dia a dia. Projetado com vidro frontal mais resistente e molduras em alumínio aeroespacial, a nova tela do iPhone XRde 6.1” é a mais avançada LCD da indústria, Liquid Retina com um novo design moderno de retroiluminação para você ampliar a tela até a borda, acompanhando a curvatura dos cantos. Visualizando cores fiéis de ponta a ponta, ou seja, brilha com tudo. Outro diferencial do produto, para potencializar ainda mais o dispositivo móvel o processador com um novo nível de inteligência. Alto desempenho do chip A12 Bionic, que traz a nova geração do Neural Engine criado pela Apple. Ele usa aprendizado de máquina em tempo real para transformar a maneira como você interage com fotos, jogos, realidade aumentada e muito mais. Com conectividade 4G e Wi-Fi você acessa as redes sociais e navega na internet com facilidade, basta acessar a sua rede de dados ou se conectar a uma rede sem fio disponível. E para registrar todos os momentos em alta definição câmera traseira de 12MP e frontal de 7MP para você tirar fotos incríveis e não perder nenhum detalhe, além disso, a filmadora 4K para gravar vídeos espetaculares, tudo isto no iPhone XR da Apple. E para garantir mais segurança de acesso, a autenticação facial será perfeita, com o Face ID avançado a senha será o seu rosto, funcionalidade que permite desbloquear, acessar apps e muito mais com a confiabilidade e praticidade que você precisa. O iPhone XR é impressionante de qualquer ângulo. ',
          'category_id' => 16
      ]);

      App\Product::create([
          'name'    => 'Telefone sem Fio Panasonic KX-TGC210LBB Preto com Viva Voz, Identificação de Chamadas, Visor Grande, Teclado Iluminado e Dect 6.0',
          'code_prod'   => '11542313',
          'description' => 'O telefone Panasonic sem fio KX-TGC210LBB proporciona muito conforto e comodidade, seu grande visor e o teclado iluminado são perfeito para ambientes com pouca iluminação, permitindo que o usuário possa falar em qualquer lugar da casa. Sua função viva voz é ideal para quem precisa estar ao telefone, mas com as mãos livres para realizar outras tarefas. Além disso, ele conta com identificador de chamadas, e é possível bloquear aquelas chamadas indesejadas, basta cadastrar o número do telefone na lista de chamadas bloqueadas. O Telefone Panasonic sem fio KX-TGC210LBB vem equipado com a moderna tecnologia DECT 6.0. Ela trabalha na frequência 1.9MH, garantindo a qualidade da transmissão do seu aparelho e evitando aquelas famosas interferências, permitindo que os sinais do telefone soem com mais clareza, e como é um sinal digital são ainda muito mais seguro.',
          'category_id' => 16
      ]);

      App\Product::create([
          'name' 		=> 'Patinete infantil dobrável reforçado com freio amortecedor e pezinho de apoio INMETRO 70Kg',
          'code_prod'   => '34976026',
          'description' => 'Para quem procura qualidade e segurança este é o presente ideal, um patinete completo, com amortecedor, pezinho de apoio, freio traseiro e chave para manutenção. Um produto altamente resistente, com acabamento personalizado colorido, ideal tanto para meninos e meninas que adoram se divertir ao ar livre, incentivando o exercício ao ar livre, contribuindo para uma vida mais saudável e um desenvolvimento mais equilibrado, além de muito prático podendo ser dobrável e guardado em pequenos espaços e remontado com facilidade. PRODUTO COM INMETRO - segurança e qualidade garantida.',
          'category_id' => 10
      ]);

      App\Product::create([
          'name' 		=> 'Maleta de maquiagem profissional completa Luisance Bz17',
          'code_prod'   => '52584540',
          'description' => 'O Kit de Pincéis para Maquiagem Macrilan auxilia para uma maquiagem perfeita e a qualquer momento, pois possui um formato ideal para levar na bolsa. Composto por pincéis fáceis para manusear e com pelos super macios para uma maquiagem delicada.',
          'category_id' => 15
      ]);

      App\Product::create([
          'name'    => 'Batedeira Planetária Philco Turbo Inox PHP500 com 11 Velocidades – Preta',
          'code_prod'   => '12657526',
          'description' => 'Conquiste melhor rendimento e desempenho na hora de fazer suas receitas com a Batedeira Planetária Philco Turbo Inox. Com 11 velocidades mais a Função Turbo, você obtém sempre misturas uniformes, macias, no ponto que você quiser, seja qual for a consistência dos ingredientes. Com design moderno elegante, vai deixar sua cozinha mais equipada e charmosa. Sua tigela é de inox, altamente resistente e fácil de limpar, com capacidade para 4 litros, para todos os tamanhos de receitas. Fácil de manusear, vem com tampa antirrespingos, mais praticidade e higiene na sua cozinha. Estimule seu lado chefe de cozinha! Com três tipos de batedores, para massa leves, pesadas e claras em neve, a Batedeira Planetária Philco Turbo Inox prepara suas receitas rapidamente e com resultados incríveis. Ideal para doces, salgados, inclusive pizzas, pães e outras massas que exigem maior potência. Batedeira Planetária Philco Turbo Inox PHP500 a grande aliada na sua cozinha!',
          'category_id' => 11
      ]);

      App\Product::create([
          'name' 		=> 'Home Theater Blu-ray 3D Full HD LG LHB625M 1000W 5.1 Canais Private Sound USB',
          'code_prod'   => '125595108',
          'description' => 'Alta tecnologia e qualidade de som com design compacto. O Home Theater Blu-ray 3D LHB625M possui 1000W de potência distribuídos entre 5.1 canais de áudio e permite a conexão com a TV LG sem a necessidade de fios via Bluetooth com a função Sound Sync Wireless. É possível aproveitar todos os conteúdos e aplicativos da internet com a plataforma SmartTV, ouvir suas músicas favoritas de qualquer dispositivo móvel via conexão Bluetooth, controlar seu Home Theater através do smartphone pelo LG Remote App e ouvir seus filmes favoritos com um fone de ouvido conectado ao seu celular através do modo Private Sound. Além disso, o LJB625M transforma as imagens HD em FULL HD sem perder a qualidade, com a função Full HD Upscalling, e ainda, permite gravar suas músicas favoritas de um Pen Drive ou CD para outro Pen Drive com a função USB Direct Recording.',
          'category_id' => 13
      ]);

    }
}
