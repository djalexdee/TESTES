function refreshCode(){   
  $.ajax({
          url: "/Tasks/tarefas",
          cache: false,
          success: function(html){
            $("#refresh").html(html);
          }
        })
}

setInterval(function(){ refreshCode(); }, 1000)
