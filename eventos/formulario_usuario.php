<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
        <link rel="stylesheet" href="css/cadastro.css">
  </head>

  <body>
    <h1>Cadastro Usuário</h1>

    <!-- Login Container -->
    <section class="login">
    <form action="cadastro_usuario.php" method="post">

        <!-- Nome -->
        <label for="firstname">Nome
        <input type="text" name="firstname" id="username"  maxlength="50"/>
        </label>

        <!-- Sobrenome -->
        <label for="lastname">Sobrenome
        <input type="text" name="lastname" id="username"  maxlength="50"/>
        </label>

        <!-- Email -->
        <label for="email">Email
        <input type="text" name="email" id="username"  maxlength="100"/>
        </label>

        <!-- Usuário -->
        <label for="username">Usuário
        <input type="text" name="username" id="username"  maxlength="32"/>
        </label>

        <!-- The Password Field -->
        <label for="password">Senha
        <input type="password" name="userpass" id="password" maxlength="32"/>
        </label>

        <!-- Clearn both sides -->
        <div class="clear"></div>

        <!-- The Login Button -->
        <input type="submit" value="Registrar" />

    </form>
    </section>
  </body>
</html>
