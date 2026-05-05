<?php
// Ana Beatriz
// Nomenclatura snake_case

function ler_opcao($mensagem, $opcoes_validas)
{
    while (true) {
        $entrada = readline($mensagem);
        if (in_array($entrada, $opcoes_validas)) {
            return $entrada;
        }
        echo "Entrada inválida. Tente novamente.\n";
    }
}

// AVISO DE PRIVACIDADE [cite: 100]
echo "AVISO DE PRIVACIDADE:\n";
echo "Seus dados serão usados apenas para fins educacionais e personalização da experiência.\n\n";

$nome = readline("Digite seu nome: ");
while (empty($nome)) {
    echo "Nome inválido.\n";
    $nome = readline("Digite seu nome: ");
}

$cargo = readline("Digite seu cargo: "); // Corrigido de $carga para $cargo para consistência [cite: 95]
while (empty($cargo)) {
    echo "Cargo inválido.\n";
    $cargo = readline("Digite seu cargo: ");
}

echo "\nBem-vindo(a), $nome ($cargo)!\n";

$resumo = [];
$aceitou = false; // Corrigido de 'falso'

while (true) { // Corrigido de 'enquanto (verdadeiro)'

    echo "\n==== MENU PSI ====\n";
    echo "1 - Política completa (Conceitos e Diretrizes)\n";
    echo "2 - Gestão de Acessos e Usuários\n";
    echo "3 - Pilares Fundamentais (Tríade CIA)\n";
    echo "4 - Uso Aceitável e Consequências\n";
    echo "5 - Ver resumo geral de navegação\n";
    echo "6 - Aceitar política\n";
    echo "0 - Sair\n";

    $opcao = ler_opcao("Escolha: ", ["0", "1", "2", "3", "4", "5", "6"]);

    switch ($opcao) {
        case "1":
            echo "\n--- POLÍTICA DE SEGURANÇA DA INFORMAÇÃO ---\n";
            echo "A PSI estabelece regras e responsabilidades para proteger ativos de dados[cite: 1].\n";
            echo "Ela define comportamentos esperados para garantir a confidencialidade, integridade e disponibilidade[cite: 2].\n";
            $resumo[] = "Definição de PSI";
            break; // Corrigido de 'quebrar'

        case "2":
            echo "\n--- GESTÃO DE ACESSOS E USUÁRIOS ---\n";
            echo "Identificação: Login do usuário[cite: 20].\n";
            echo "Autenticação: Prova de identidade (senhas, biometria)[cite: 21].\n";
            echo "Autorização: Permissões concedidas (ler, editar)[cite: 22].\n";
            echo "Ciclo de vida: Admissão, Mudança de Função e Desligamento[cite: 25, 26, 27].\n";
            $resumo[] = "Gestão de Acessos";
            break;

        case "3":
            echo "\n--- PILARES FUNDAMENTAIS (TRÍADE CIA) ---\n";
            echo "Confidencialidade: Acesso apenas por pessoas autorizadas[cite: 10].\n";
            echo "Integridade: Informação precisa e não alterada indevidamente[cite: 12].\n";
            echo "Disponibilidade: Acesso garantido quando necessário[cite: 14].\n";
            $resumo[] = "Tríade CIA";
            break;

        case "4":
            echo "\n--- USO ACEITÁVEL E CONSEQUÊNCIAS ---\n";
            echo "Uso Aceitável: Recursos devem ser usados para fins profissionais[cite: 65].\n";
            echo "Consequências: Sanções incluem advertências, suspensão e demissão por justa causa[cite: 81, 84].\n";
            $resumo[] = "Uso e Consequências";
            break;

        case "5":
            echo "\n--- RESUMO GERAL DA NAVEGAÇÃO ---\n";
            if (empty($resumo)) {
                echo "Nenhum conteúdo acessado ainda.\n";
            } else {
                foreach ($resumo as $item) { // Corrigido de $ressumo
                    echo "- $item\n";
                }
            }
            break;

        case "6":
            $confirm = ler_opcao("Aceita a política? (1-Sim / 2-Não): ", ["1", "2"]);
            if ($confirm == "1") {
                echo "Você ACEITOU a política.\n";
                $aceitou = true;
            } else {
                echo "Política NÃO aceita.\n";
                $aceitou = false;
            }
            break;

        case "0":
            echo "\nEncerrando aplicação...\n";
            echo "Resumo final de tópicos vistos:\n";
            if (empty($resumo)) {
                echo "- Nenhum tópico foi lido.\n";
            } else {
                foreach (array_unique($resumo) as $item) {
                    echo "- $item\n";
                }
            }
            echo $aceitou ? "STATUS: O usuário ACEITOU a política[cite: 99].\n" : "STATUS: O usuário NÃO aceitou a política.\n";
            exit; // Corrigido de 'saída'
    }
}
