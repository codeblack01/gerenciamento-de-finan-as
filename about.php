<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finance Management System - Controle suas finanças de forma prática e segura">
    <title>Finance Management System - Sobre</title>
    <style>
        /* Estilos globais */
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            margin: 0; 
            padding: 0; 
            color: #333; 
            background-color: #f4f4f9; 
        }

        /* Cabeçalho */
        header { 
            background: #006400; /* Verde escuro */
            color: white; 
            padding: 20px 0; 
            text-align: center; 
            position: sticky; 
            top: 0; 
            width: 100%; 
            z-index: 1000; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 { 
            margin: 0; 
            font-size: 2.5em; 
            color: #ffffff; 
        }

        /* Navegação */
        nav { 
            margin-top: 10px; 
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #32CD32; /* Verde claro */
        }

        /* Conteúdo principal */
        .container { 
            max-width: 1200px; 
            margin: auto; 
            padding: 20px; 
            animation: fadeIn 1s ease-in-out; 
        }

        h1, h2 { 
            color: #006400; 
        }

        .content img { 
            width: 100%; 
            max-width: 500px; 
            margin: 20px 0; 
            border-radius: 8px; 
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        ul { 
            padding-left: 20px; 
            line-height: 1.8; 
        }

        /* Seção de chamada para ação */
        .cta { 
            background: #006400; 
            color: white; 
            text-align: center; 
            padding: 40px 20px; 
            margin-top: 40px; 
            border-radius: 8px; 
        }

        .cta h2 { 
            font-size: 2em; 
            margin-bottom: 10px; 
        }

        .cta p { 
            font-size: 1.2em; 
        }

        .cta a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #32CD32; /* Verde claro */
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta a:hover {
            background-color: #228B22; /* Verde escuro */
        }

        /* Rodapé */
        footer { 
            background: #333; 
            color: white; 
            text-align: center; 
            padding: 20px 0; 
            margin-top: 40px; 
            font-size: 0.9em; 
        }

        footer p a { 
            color: #32CD32; 
            text-decoration: none; 
        }

        footer p a:hover { 
            text-decoration: underline; 
        }

        /* Animações */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

<header>
    <h1>Finance Management System</h1>
    <p>Controle suas finanças de forma prática, segura e eficiente</p>
    <nav>
        <ul>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#recursos">Recursos</a></li>
            <li><a href="#historia">História</a></li>
            <li><a href="#login">Login</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <section id="sobre" class="content">
        <h2>Sobre o Sistema</h2>
        <p>O <strong>Finance Management System</strong> é uma plataforma poderosa e intuitiva para controle financeiro. Ela foi desenvolvida para ajudar empresas e indivíduos a organizarem suas finanças de maneira eficaz, segura e acessível. Com esta solução, você pode monitorar despesas, receitas e investimentos, além de gerar relatórios financeiros completos para um gerenciamento detalhado.</p>
    </section>

    <section id="historia">
        <h2>História</h2>
        <p>O Finance Management System foi desenvolvido por uma equipe de especialistas que notou a falta de uma ferramenta completa e amigável para o controle financeiro de pequenas e médias empresas. Desde o início, nosso objetivo foi criar uma plataforma acessível que facilitasse a gestão financeira para usuários sem experiência avançada em finanças.</p>
    </section>

    <section id="recursos">
        <h2>Recursos</h2>
        <ul>
            <li><strong>Autenticação Segura</strong>: Utilize login e senha com criptografia de dados para garantir a segurança das suas informações financeiras.</li>
            <li><strong>Gestão de Receitas e Despesas</strong>: Registre e categorize receitas e despesas de maneira detalhada para obter uma visão clara de suas finanças.</li>
            <li><strong>Relatórios Personalizados</strong>: Acesse relatórios financeiros com gráficos e tabelas, permitindo um acompanhamento detalhado de sua saúde financeira.</li>
            <li><strong>Exportação para Excel</strong>: Exporte seus dados financeiros para planilhas do Excel para uma análise mais aprofundada e controle externo.</li>
            <li><strong>Dashboards Personalizados</strong>: Crie dashboards para visualizar informações essenciais e manter uma visão completa do seu fluxo de caixa e desempenho financeiro.</li>
            <li><strong>Suporte 24/7</strong>: Equipe de suporte disponível para ajudar você com dúvidas e personalizações do sistema.</li>
        </ul>
    </section>

    <section id="login">
        <h2>Login no Sistema</h2>
        <p>Para acessar o painel de controle, utilize o <a href="Painel_de_login">painel de login</a> e faça a autenticação com suas credenciais. Após o login, você terá acesso a todas as funcionalidades de gerenciamento e visualização de finanças.</p>
    </section>

    <section class="cta">
        <h2>Comece a Gerenciar Suas Finanças Agora!</h2>
        <p>Cadastre-se hoje e tenha controle total sobre sua vida financeira, com dashboards personalizáveis, relatórios completos e exportação para Excel!</p>
        <a href="Painel_de_login/register.html">Cadastrar Agora</a>
    </section>
</div>

<footer>
    <p>&copy; <script>document.write(new Date().getFullYear());</script> Finance Management System. Todos os direitos reservados.</p>
    <p><a href="https://www.finance-management.com.br">www.finance-management.com.br</a></p>
</footer>

</body>
</html>
