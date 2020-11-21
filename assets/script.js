const BASE_URL = "http://localhost/Belajar_Vue/";

var vm = new Vue({
    el: '.app',
    data:{
        allData: [],
        dataInstitusi:[],
        form: {id: ''}
        
    },
    created: function () {

        this.getAllInstansi();
        this.metId();
    },
    methods:{
        getAllInstansi: function () {
            axios.get(BASE_URL+"Home/institusi")
            .then(function (response) {
                vm.dataInstitusi = response.data;
            })
        },
        metId: function () {
            console.log(this.form.id);
            axios.post(BASE_URL + "Home/contact",this.form.id)
            .then(function (response) {
                vm.allData = response.data;
            })
            .catch(function (error) {
                vm.allData = "error " + error;
                
            })
        }

    }
});