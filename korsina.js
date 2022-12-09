$(function() {
    const input = document.querySelector('#sesionid');
    $('.st11').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        $.ajax({
            url: '/Enjoy/obrabotka.php',
            type: 'GET',
            data: {cart: 'add', id: id, userid: +input.value},
            dataType: 'json',
            success: function (res) {
                console.log(res);
                alert('Добавленно в корзину')
            },
            error: () => {
                alert('Вы уже добавили этот товар в корзину! Или не вошли в аккаунт!')
            }
        })
    })


    // $('.st12').on('click', function (){
    // $.ajax({
    //     url:'/Enjoy/udalenie.php',
    //     type:'GET',
    //     data: {cart:'add', id: id, userid: +input.value},
    //     dataType:'json',
    //     success:function (res){
    //         console.log(res);
    //         alert('Товар удалён из корзины')

    $(function () {
        const input = document.querySelector('#sesionid');
        $('.st12').on('click', function () {
            let id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: '/Enjoy/udalenie.php',
                type: 'GET',
                data: {cart: 'clear', id: id, userid: +input.value},
                // data: {cart:'clear', id: id, userid: +input.value},
                success:  (res) => {
                this.parentElement.remove()
                },
            })
        })
    })
})
