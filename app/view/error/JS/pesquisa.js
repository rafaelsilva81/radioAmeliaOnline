var id = new Array();
var indexresult;
function tplawesome(e,t){res=e;for(var n=0;n<t.length;n++){res=res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})} return res}
// O CIFRÃO $ EM JQUERY QUER DIZER THIS , TIPO O JAVA THIS.ALGO 
$(function() {
    $("form").on("submit", function(e) {
       e.preventDefault();

       // cria o request para a API do google, cria o cliente, é criado pela importação feita no index.html
       var request = gapi.client.youtube.search.list({
            // é coisa padrão da api
            part: "snippet",
            // tipo : video
            type: "video",
            //-------------------------------------------
            // esse q é a barra de pesquisa, o nome do elemento que vai ser pesquisado
            q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            // Nesse caso, ele pega o id Search do HTML (o valor dele) e da o replace em qualquer /%20/g (que é o espaço eu acho), por um + para que api entenda 
            // Que se trata de um espaço , trocando por um + por que é assim que a api aceita as pesquisas
            // ------------------------------------------

            // Order : a ordem dos videos, possiveis : relevance, date, title, rating, viewCount e videoCount
            order: "relevance",

            //MaxResults : O padrão é 5, o máximo é 50. Se trata do numero de resultados que a API retonará.
            maxResults : 10
       }); 

       // EXECUTA o request realizado, retornando no parametro response
       request.execute(function(response) {
          //Cria uma variavel results, que absorve o resultado do parametro response (resposta da api)
          var results = response.result;
          //Pega o this.#results (ID RESULTS DA DIV HTML) e deixa ele VAZIO 
          $("#results").html("");
          //$.each é como se fosse um foreach, e na função ele retorna o indice e o item pegado 
          //Para cada item presente no results, execute uma função passando os parametros index e item
          $.each(results.items, function(index, item) {
          	//adicione isso no array de id (baseado no index)
            id[index] = item.id.videoId; //pega o id do video
            //$.get é o comando para retirar dados do servidor com o parametro GET, o endereço no caso é esse : https://www.googleapis.com/youtube/v3/search
            //Então após isso ele resulta em uma função que leva os dados do vídeo como parametro
            $.get("app/view/tpl/template.html", function(data) {

        //Ele então da o APPEND usando tplawesome (estudar) com o titulo do vídeo e o id do vídeo utilizando o item.html que está dentro da pasta tpl
        $("#results").append(tplawesome(data, [{"title":item.snippet.title, "videoid":item.id.videoId, "index":index}]));
        
            });
          });
          //Função
          resetVideoHeight();
       });
    });
    //Se a tela mudar o video também reseta a altura
    $(window).on("resize", resetVideoHeight);
});

//Essa função pega a altura e largura do video , arruma na div #results através do css e multiplica com 9/16
function resetVideoHeight() {
    $(".video").css("height", $("#results").width() * 9/16);
}

//Essa init é iniciada no index.html, setando as configuraçoes da API
function init() {

    //Seta a API do youtube para a utilização da API
    gapi.client.setApiKey("AIzaSyCCXeK6AOLE7Tk5hKvBAyHY9GH-ANHTWDM");
    //Carrega na api do google, a parte do youtube que será utilizada
    gapi.client.load("youtube", "v3", function() {
    });
}

function selecionar(index,title,videoid) {
	event.preventDefault();
   var botaoChamado = "#"+"b"+index;
   var containerChamado = "#"+"container"+index;


 	$(botaoChamado).addClass("disabled");
  $.get("app/view/tpl/botoes.html", function(data) {

  $(containerChamado).append(tplawesome(data, [{"title":title, "videoid":videoid, "index":index, "botaoChamado":botaoChamado, "containerChamado":containerChamado}]));
  
  });

}

function confirmar(index,title,videoid) {
	event.preventDefault();

}

function cancelar(botaoChamado,containerChamado,index) {
	event.preventDefault();
	$(botaoChamado).removeClass("disabled");
  var divChamada = "#action"+index;
  $(divChamada).remove();
  console.log(divChamada);

}