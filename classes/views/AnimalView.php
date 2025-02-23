<?php 

class AnimalView {
    
    function ExibirTodosAnimais() {           
        $animalController = new AnimalController();
        $listaTodosAnimais = $animalController->Listar();

        // Verifica se a lista retornada é válida
        if (!is_array($listaTodosAnimais) || empty($listaTodosAnimais)) {
            echo "<p>Nenhum animal encontrado.</p>";
            return;
        }

        foreach ($listaTodosAnimais as $animal) { 
            echo "
            <div class='caixaAnimal'>
                <a href='atendimento.html'>
                    <img src='imagens/" . htmlspecialchars($animal->Nome) . ".jpeg'>
                    <div class='caixa'>
                        <h1>" . htmlspecialchars($animal->Nome) . "</h1>
                        <p>" . (isset($animal->Especie->Nome) ? htmlspecialchars($animal->Especie->Nome) : "Espécie não definida") . "</p>
                    </div>
                </a>
            </div>";
        }
    }

    // function BuscarPeloNome($nome) {
    //     $animalController = new AnimalController();
    //     $listaAnimaisComEsteNome = $animalController->BuscarPeloNome($nome);

    //     // Verifica se a lista retornada é válida
    //     if (!is_array($listaAnimaisComEsteNome) || empty($listaAnimaisComEsteNome)) {
    //         echo "<p>Nenhum animal encontrado com esse nome.</p>";
    //         return;
    //     }

    //     foreach ($listaAnimaisComEsteNome as $animal) { 
    //         echo "
    //         <div class='caixaAnimal'>
    //             <a href='atendimento.html'>
    //                 <img src='imagens/" . htmlspecialchars($animal->Nome) . ".jpeg'>
    //                 <div class='caixa'>
    //                     <h1>" . htmlspecialchars($animal->Nome) . "</h1>
    //                     <p>" . (isset($animal->Especie->Nome) ? htmlspecialchars($animal->Especie->Nome) : "Espécie não definida") . "</p>
    //                 </div>
    //             </a>
    //         </div>";
    //     }
    // }
}    

?>
