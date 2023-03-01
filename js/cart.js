let app = function(){
    let btns = document.querySelectorAll(".btn-cart");
     btns[0].onclick = function(e) {
        cart_submit(e.target);
     }
     btns[1].onclick = function(e) {
        cart_submit(e.target);
     }
     async function cart_submit(t) {
        let form = new FormData();
        if (t.getAttribute('data-btn') == "aceite") {
            form.append("action","aceite");
        }else{
            form.append("action","rejeitado");
        }

        let options = {
            method: 'POST',
            body: form
        }
        await fetch("http://localhost/202000169_exame-main/php/insert_request.php",options).then((res) => res.json()).then(((data) => {
           console.log(data.msg);
           if (data.msg == 'aceite') {

                alert(data.msg)
           }else{
                alert(data.msg)
           }

             close_evt()
        }))

        function alert(tp) {
            let content = '';
            let place = document.getElementById("alert-box");
            if (tp == 'aceite') {
                content = '<div class="box-info"> <h2>Foi aceite</h2> <button class="btn btn-primary" id="close-info">OK</button> </div>';
            }else{
                content = '<div class="box-info"> <h2>Foi rejeitado</h2> <button class="btn btn-primary" id="close-info">OK</button> </div>';
            }
            place.innerHTML = content;
        }

        function close_evt(){
            if (document.getElementById("close-info")) {
                document.getElementById("close-info").onclick = function() {
                    window.location.reload();
                }
            }
        }

    }
}
app();