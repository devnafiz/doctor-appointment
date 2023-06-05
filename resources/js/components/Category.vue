
<script setup>
import  axios from 'axios'


import {ref, onMounted, reactive } from 'vue'

const categories =ref([]);


const getCategory=()=>{
	axios.get(`http://127.0.0.1:8000/api/categories`)
   .then((response)=>{
     console.log(response.data);
	 categories.value = response.data;
   })

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

					<a ><i class="fas fa-edit"></i></a>
					<a ><i class="fas fa-trash"></i></a>
				</td>
			</tr>
	   </tbody>
    </table>
</div>



			

</template>

