<template>
    <!-- Modal --> 
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="createStudent">
            <div class="modal-body">
                <div class="form-group">
                  <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" class="form-control" v-model="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" required>
               </div>
               </div>
               </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</template>

<script>
    export default{
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            name:'',
          }
        },
        methods:{
        createStudent(){
         axios.post('/setData',{
            name:this.name       
          })
          .then(data=>this.$emit('stdRecord',data))
          .catch(error=>console.log(error));
          $('#addModal').modal('hide');
          this.name='';
      
          }
          }
        
          
    }
</script>
