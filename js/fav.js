let app = function() {
    let fav_btn = document.querySelectorAll(".fav_btn");


    function evt_fav(){
        for (let i = 0; i < fav_btn.length; i++) {
            fav_btn[i].addEventListener('click', function(e) {
                let prod_id = e.target.getAttribute('data-id');
                turn_fav_prod(prod_id,e.target);
            })
        }
    }

    async function turn_fav_prod(id, item){
        let form = new FormData();
        form.append('tp','fav');
        form.append('prod_id',id);
        let options = {
            method: 'POST',
            body: form
        }
        await fetch("http://localhost/202000169_exame-main/fav_insert.php",options).then((res) => res.json()).then(((data) => {
            console.log(data);
            console.log(data)
                item.removeAttribute('class');
                item.setAttribute("class",data.icon);
        }))
    }
    evt_fav();
}
app();