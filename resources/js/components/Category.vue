
<script setup>
import  axios from 'axios'


import {ref, onMounted, reactive } from 'vue'


const formValues = ref();
const form = ref(null);

const categories =ref([]);
const editing =ref(false);




const getCategory=()=>{
	axios.get(`http://127.0.0.1:8000/api/categories`)
   .then((response)=>{
     console.log(response.data);
	 categories.value = response.data;
   })

}

const editCategory=(category)=>{
	
     $('#categoryFormModal').modal('show'); 

}

onMounted(()=>{
    getCategory();
    //toastr.info('success');
})


</script>

<template>
    <div class="content-header">
			<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
			<h1 class="m-0">Starter Page1</h1>
			</div>
			<div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Starter Category</li>
			</ol>
			</div>
			</div>
			</div>
</div>
<div>
	<table class="table table-bordered">
       <thead>
		<tr>
			<th>Sl</th>
			<th>Name</th>
			<th>action</th>
		</tr>
	   </thead>
	   <tbody>
		    <tr v-for="(category, index) in categories" :key="category.id">
				<td>{{ category.id}}</td>
				<td>{{ category.name }}</td>
                <td>

					<a @click.prevent="editCategory(category)"><i class="fas fa-edit"></i></a>
					<a ><i class="fas fa-trash"></i></a>
				</td>
			</tr>
	   </tbody>
    </table>
</div>

<div class="modal fade" id="categoryFormModal" data-backdrop="static" tabindex="1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        <span v-if="editing" >Edit User</span>
                        <span  v-else>Add New User</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <Form  ref="form"  @submit="handleSubmit"  :initial-values="formValues">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <Field  name="name" type="text" class="form-control"
                                id="name"  placeholder="Enter full name" :class="{'is_invalid': errors.name}" />
                            <span class="invalid-feedback">{{errors.name}}</span>
                        </div>

                        

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary"  >Save</button>
                    </div>
                </Form>
            </div>
        </div>
    </div>




			

</template>

