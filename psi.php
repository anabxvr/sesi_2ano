<?php
//nomeclatura snake_case
//Ana Beatriz

$RESPOSTA = [1, 2, 3, 4, 5];
$RESPOSTA1 = "";
$RESPOSTA2 = "SAIR";

echo "DIGITE SEU LOGIN: ";

while ($RESPOSTA1 != 5) {
    echo "----SEJA BEM VINDO----";
    echo "PARA VERIFICAR A POLITÍCA DE SEGURANÇA DA INFORMAÇÃO COMPLETA, DIGITE 1 ";
    echo "PARA LER APENAS OS PRICIPAIS TÓPICOS DA POLITÍCA DE SEGURANÇA DA INFORMAÇÃO , DIGITE 2 ";
    echo "PARA LER APENAS SOBRE OS PILARES FUNDAMENTAIS, DIGITE 3 ";
    echo "PARA SE INFORMAR SOBRE A LGPD, DIGITE 4 ";
    echo "SE VOCÊ DESEJA SAIR DO MENU, DIGITE 5";



    $RESPOSTA1 = readline("ESCOLHA UMA DAS OPÇÕES:");
    switch ($RESPOSTA1) {
        case 1:
            echo "O que é
A Política Nacional de Segurança da Informação (PNSI) - decreto 12.572, de 4 de agosto de 2025 - é um instrumento normativo do Estado brasileiro que estabelece as diretrizes estratégicas, princípios e objetivos para assegurar a disponibilidade, a integridade, a confidencialidade e a autenticidade da informação no País, de modo a garantir a proteção das informações consideradas relevantes para a segurança nacional, a soberania e o interesse público. A PNSI está na sua 3ª geração e é instrumento essencial para afiançar que os serviços públicos continuem funcionando com segurança, alto nível de proteção dos dados e torne o Brasil cada vez mais preparado para os desafios globais que surgem diariamente no mundo digital.

----Objetivos----
Reestruturar os princípios e objetivos da Política Nacional, com foco na gestão de riscos e na construção de uma rede colaborativa e abrangente que orienta como o Governo deve cuidar da segurança da informação;
Incorporar os normativos emitidos pelo Gabinete de Segurança Institucional da Presidência da República como instrumentos oficiais, fortalecendo o alinhamento com as melhores práticas internacionais;
Abordar segurança da informação como um tema mais amplo que segurança digital, envolvendo questões de segurança física e de instalações, segurança no tratamento de informações em qualquer meio (físico ou digital), e a necessidade de capacitar e conscientizar constantemente aqueles que atuam no âmbito da Administração Pública Federal;
Promover maior clareza nas competências dos órgãos envolvidos, bem como nas atribuições dos gestores de segurança da informação;
Consolidar uma governança moderna, eficiente e integrada, fundamental para enfrentar os desafios contemporâneos que impactam diretamente o Estado e a sociedade
;Valorizar a cooperação com outros países, uma vez que no mundo digital, os desafios ultrapassam fronteiras; e
Definir mais claramente as responsabilidades dos órgãos públicos e das pessoas que cuidam da segurança da informação dentro da Administração Pública Federal.
Resultados esperados
Consolidação da cultura de segurança da informação no setor público;
Priorização:
da proteção de dados pessoais e informações sensíveis;
da defesa de nossas infraestruturas críticas;
do desenvolvimento tecnológico;
da capacitação de profissionais; e
da cooperação internacional.
Promoção de ações integradas, reafirmando a soberania nacional e a confiança do cidadão nos serviços prestados pelo Estado brasileiro;
Disseminação da compreensão de que segurança da informação não é apenas uma questão técnica, mas sim um valor estratégico para o País; e
Fortalecimento da confiança da população nos serviços públicos e na capacidade do Estado de proteger seus dados e seus direitos.";
            break;
        case 2:

            echo "Principais Tópicos:
Confidencialidade: Assegura que a informação só seja acessada por pessoas autorizadas.
Integridade: Garante que a informação seja mantida em seu estado original, protegida contra alterações não autorizadas.
Disponibilidade: Garante que os dados estejam acessíveis aos usuários autorizados sempre que necessário.
Autenticidade: Confirma que a informação ou usuário é legítimo (quem diz ser).
Não-repúdio (ou Irretratabilidade): Impede que alguém negue ter realizado uma ação (como enviar um e-mail ou assinar um documento).";
            break;
        case 3:

            echo "Os Pilares Fundamentais 
Confidencialidade: Garante que a informação seja acessada apenas por pessoas ou sistemas autorizados, evitando vazamentos e uso indevido de dados.
Integridade: Assegura que os dados sejam preservados, garantindo sua precisão e confiabilidade, prevenindo alterações indevidas ou corrupção da informação.
Disponibilidade: Garante que a informação esteja acessível aos usuários autorizados no momento em que precisarem dela, evitando interrupções nos sistemas e serviços.";
            break;
        case 4:

            echo "A Lei Geral de Protecao de Dados (LGPD, Lei n° 13.(09/2018) e a legislacao
brasileira que regula o tratamento de dados pessoais físicos ou digitais, visando
proteger a privacidade e os direitos fundamentais. Ela obriga empresas e órgãos
públicos a terem transparência e consentimento no uso de informações. Objelvo. Proteger dados pessoais de pessoas lisicas, garanuindo liberdade,

privacidade e autodeterminação informativa.
Aplicação: Aplica-se a qualquer pessoa jurídica ou física que colete,
armazene ou processe dados pessoais no Brasil, independente do meio
(físico ou digital).

Dados Pessoais:
Informações que identificam ou podem identificar uma pessoa (nome, CPF,
RG, endereço, e-mail, geolocalização).
Dados Sensiveis: Informacões sobre origem racial/etnica, conviccao religios
opinião política, saúde, biometria ou vida sexual, exigindo proteção especial.
Direitos do Titular: O cidadão pode solicitar acesso, correção, eliminação ou
portabilidade dos seus dados.
Penalidades: O descumprimento pode gerar multas de até 2% do
faturamento, limitada a R$ 50 milhões por infração, além de advertências e
bloqueio de dados.  ";
            break;
        case 5:
            echo "Saindo...";
            break;
        default:
            echo "erro...";
            break;
    }
}
