# Tarefa de Escola: Sistema Web 2

Este é o README para a tarefa de escola que consiste na implementação de um sistema web utilizando HTML, CSS e PHP. O sistema é composto por várias funcionalidades, cada uma representada por uma página específica. Abaixo, você encontrará uma descrição detalhada de cada página e sua funcionalidade.

### Estrutura do Projeto:

O projeto está estruturado da seguinte forma:

- **index.php**: Página principal que serve como menu de navegação para acessar as diferentes funcionalidades do sistema.
- **pages/multa.php**: Página para calcular multas com base no peso de peixes pescados.
- **pages/primos.php**: Página para calcular números primos até um determinado limite.
- **pages/imc.php**: Página para calcular o Índice de Massa Corporal (IMC) com base no peso, altura e sexo.
- **pages/temperaturas.php**: Página para converter temperaturas entre Celsius e Fahrenheit.

Além disso, o projeto inclui arquivos de estilo CSS, imagens e scripts PHP necessários para o funcionamento correto das páginas.

### Funcionalidades:

1. **Multa (pages/multa.php)**:
   - **Descrição**: Esta página permite calcular multas com base no peso de peixes pescados. Caso o peso exceda um limite predefinido, é aplicada uma multa proporcional ao excesso de peso.
   - **Uso**: Basta inserir o peso dos peixes pescados no formulário e clicar em "Verificar" para calcular a multa, se aplicável.
   - **Funcionamento**: O PHP nesta página recebe o peso inserido pelo usuário, verifica se excede o limite e, se necessário, calcula o valor da multa.

2. **Primos (pages/primos.php)**:
   - **Descrição**: Nesta página, é possível calcular e exibir todos os números primos até um determinado limite especificado pelo usuário.
   - **Uso**: Insira o limite desejado no formulário e clique em "Mostrar" para exibir os números primos até esse limite.
   - **Funcionamento**: O PHP nesta página implementa um algoritmo para verificar se cada número até o limite especificado é primo e os exibe.

3. **IMC (pages/imc.php)**:
   - **Descrição**: Página para calcular o Índice de Massa Corporal (IMC), levando em consideração peso, altura e sexo do usuário.
   - **Uso**: Preencha os campos do formulário com seu peso, altura e sexo, e clique em "Calcular" para obter seu IMC e informações relacionadas.
   - **Funcionamento**: Com base nos dados inseridos, o PHP nesta página calcula o IMC, determina a categoria de peso (abaixo do peso, peso ideal, etc.) e fornece informações adicionais, como peso ideal e ajuste necessário.

4. **Temperaturas (pages/temperaturas.php)**:
   - **Descrição**: Página para converter temperaturas entre Celsius e Fahrenheit.
   - **Uso**: Escolha a unidade de temperatura desejada (Celsius ou Fahrenheit), insira a temperatura a ser convertida e clique em "Calcular".
   - **Funcionamento**: Dependendo da escolha do usuário, o PHP nesta página converte a temperatura para a unidade selecionada e exibe o resultado.

### Desenvolvimento:

- O projeto foi desenvolvido por Carlos Daniel Verdeiro.
- As funcionalidades foram implementadas utilizando HTML, CSS e PHP.
- O layout e estilo das páginas foram definidos com base nas folhas de estilo CSS fornecidas no projeto.
