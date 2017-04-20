<?php include("header.php")?>
<div class="row fullWidth hero">
</div>

<div class="row fullWidth quemSomos">
    <div class="small-11 small-centered column">
        <p>O Laboratório de Políticas Públicas da Fundação Getúlio Vargas (LAB FGV) é uma organização que tem como visão ser reconhecida como uma entidade inovadora, comprometida com o desenvolvimento nacional e responsável pela melhoria na prestação dos serviços públicos.</p>
        
        <p>Nossa equipe é multidisciplinar, integrada por estudantes de todos os cursos da FGV-Rio: Direito, Economia, Administração, Ciências Sociais e de Matemática Aplicada. Conta, ainda, com o apoio e infraestrutura da FGV, bem como com a expertise e aconselhamento de seus professores e pesquisadores, os quais se envolvem diretamente nas atividades realizadas.</p>
    </div>
</div>

<div class="row equipe">
    <div class="row">
        <div class="small-3 small-centered column">
            <h1>EQUIPE</h1>
        </div>
    </div>
    <div class="container small-12 columns">
        
        <?php for($i = 1; $i <= 6; $i++){
            $cargo = $i;
            include("mostrarEquipe.php");
        }
        ?>          
    </div>
</div>
<?php include("footer.php")?>