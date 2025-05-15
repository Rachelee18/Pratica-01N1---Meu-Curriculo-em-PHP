<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel = "stylesheet" href= "style.css">
</head>

<body>

    <header>
        <?php
        $nomeCompleto = "Raquel Medeiros de Lucena"; // Substitua pelo seu nome
        $idade = 20; // Substitua pela sua idade
        $fotoPerfil = "imagens/sua_foto.jpg"; // Caminho para sua foto
        ?>
        <div class="perfil">
            <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?> anos</p>
        </div>
    </header>

    <section id="experiencia">
        <h2>Experiência Profissional</h2>
        <?php
        $experiencias = [
            [
                "empresa" => "Nome da Empresa",
                "cargo" => "Seu Cargo",
                "periodo" => "Ano Inicial – Ano Final (ou Presente)",
                "descricao" => "Breve descrição das suas responsabilidades e conquistas."
            ],
            // Adicione mais experiências conforme necessário
        ];
        ?>

        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        <?php
        $cursos = [
            [
                "nome" => "Nome do Curso/Formação",
                "instituicao" => "Nome da Instituição",
                "periodo" => "Ano Inicial – Ano Final"
            ],
            // Adicione mais cursos conforme necessário
        ];
        ?>

        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="periodo"><?php echo $curso['periodo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <?php
        $habilidades = [
            "PHP" => 0, // Avalie sua habilidade de 0 a 10
            "HTML" => 0,
            "CSS" => 0,
            "JavaScript" => 0,
            "Banco de Dados" => 0
        ];

        $hobbies = [
            "Ouvir Musica" => 10, // Avalie seu nível de interesse de 0 a 10
            "Tocar Instrumento" => 8,
            "Estudar Programação" => 8
        ];
        ?>

        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <?php echo $habilidade; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $nivel; $i++): ?>
                                <span class="preenchido"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $nivel; ?>/10)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <?php echo $hobby; ?>
                        <div class="barra-nivel">
                            <?php for ($i = 0; $i < $interesse; $i++): ?>
                                <span class="preenchido hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse; $i < 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                            (<?php echo $interesse; ?>/10)
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </section>

    <footer>
        <p>© <?php echo date("Y"); ?> Raquel Medeiros de Lucena</p>
    </footer>

</body>

</html>