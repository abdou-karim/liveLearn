$(document).ready(function (){
    let type;
    $(".card-body").
    on("dblclick",".tlt",function (){
            const input=getInput();
            $(this).html(input);
            $(this).children().focus();
    })
    function getInput(){
        const input = `<input type ="text" id="i1" />`;
        return input;
    }

    const ajouteCard=()=>{

        let line;

            line=`
         <div class="card m-2" style="width: 18rem;">
  
                <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
            </div>
        `;
            $(".cardT").append(line);
        }

    const ajouteRow=()=>{

        let line;

        line=`
           <div class="card cardT" style="width: 18rem;">
                <div class="card-title">
                    <img src="/public/img/logo-trello.jpg" alt="trello" width="100px">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="tlt" id="t_y">To do</h5>
                    </div>
                </div>
            </div>
        `;
        $(".mycard").append(line);
    }
        $("#btnC").click(function (){
            ajouteCard();
        });

    $("#btnL").click(function (){
        ajouteRow();
    });
})