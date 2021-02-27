


//var body = document.body, html = document.documentElement;

//var height = Math.max( body.scrollHeight, body.offsetHeight, 
//    html.clientHeight, html.scrollHeight, html.offsetHeight );


$('#definir-quantidade button').on('click', function(e){
    e.preventDefault();

    var qt = parseInt($("#quantidade").val());
    var preco_total = parseFloat($("#preco-total").val());
    var preco_produto = preco_total/qt;
    var action = $(this).attr('data-action');
    
    if(action == 'decrementar') {
        if((qt-1) >= 1) {
            qt=qt-1;
            preco_total = preco_total-preco_produto;
        }
    } else if(action == 'incrementar') {
        qt=qt+1;
        preco_total = preco_total+preco_produto;
    }
    console.log(qt);
    $("#quantidade").val(qt);
    $("#preco-total").val(preco_total);
    $("input[name=qt_produto]").val(qt);
});

/*
$(function(){

    $('p[class="item-category-p"]').click(function(event){
        event.preventDefault(); //previne um evento padrão. Nesse caso, NÃO atualiza a página

        //console.log($(this).serialize());

        $.ajax({
        
            url: "{{route('site.menuSelect')}}",
            type: "get",
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response){
                if(response.success === true) {
                    console.log("funcionou");
                    //redirecionar
                } else {
                    $('.messageBox').removeClass('d-none').html(response.message); //informa a mensagem de erro
                }
            }
        
        });



    });
});
*/

/*$(window).on('scroll', function(){
    var scrollTop = $(this).scrollTop(); 
    //nav.css({'opacity': 0.8});
    


    if(scrollTop <= (wind-150)) {
        navbar.css({'opacity': 0.95 , 'border-radius': 0 , 'margin': 0});
        navbarCollapse.css({'opacity': 0.95 , 'border-radius':0});

        
        //navbar.css('background-color', 'rgba(255, 255, 255, 1.0)');
        //navbarCollapse.css('background-color', 'rgba(165, 42, 42, 1.0)');
    } 
    else {
        navbar.css({'opacity': 0.85, 'border-radius':20, 'margin': 20});
        navbarCollapse.css({'opacity': 0.85 , 'border-radius':20});


        //navbar.css('background-color', 'rgba(255, 255, 255, 0.8)');
        //navbarCollapse.css('background-color', 'rgba(165, 42, 42, 0.8)');
    }
});*/

