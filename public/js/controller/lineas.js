new Vue({
    created:function(){
        this.getLineas();
    },
    el:"#lineas",
    data:{
        tipos: null
    },
    methods:{
        getLineas:function(){
            let url = "/lineas"
            axios.get(url).then(responce => {                   
                this.tipos = responce.data              
            })
        }
    }
})