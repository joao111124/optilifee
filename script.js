document.getElementById("enviar").addEventListener("click", () => {
  const entrada = document.getElementById("entrada");
  const mensagens = document.getElementById("mensagens");

  const texto = entrada.value.trim();
  if (texto === "") return;

  // Bolha do usuário
  const bolhaUsuario = document.createElement("div");
  bolhaUsuario.className = "mensagem usuario";
  bolhaUsuario.textContent = texto;
  mensagens.appendChild(bolhaUsuario);

  entrada.value = "";

  // Resposta da Lumi (exemplo simples)
  setTimeout(() => {
    const bolhaLumi = document.createElement("div");
    bolhaLumi.className = "mensagem lumi";
    bolhaLumi.textContent = "Olá! Como posso ajudar você a economizar energia ou água?";
    mensagens.appendChild(bolhaLumi);
    mensagens.scrollTop = mensagens.scrollHeight;
  }, 500);
});
 
