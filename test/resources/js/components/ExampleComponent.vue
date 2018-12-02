<template>
    <div class="container">
     <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal">
             Add
          </button>
       <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="data in name">
      <td>{{data.name}}</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
<div id="modal">
<addModal @stdRecord="refreshStudent"></addModal>
</div>
    </div>
</template>

<script>
 Vue.component('addModal', require('./addModal.vue'));
    export default {
       data(){
        return{
        name:{},
        }
       },
        mounted() {
            this.getData();
        },
        methods:{
            getData(){
            axios.get('/getData')
              .then(response => {
               this.name= response.data;
                
              });
            },
            refreshStudent(data){
                         this.name=name.data;
            }
        }
    }
</script>
