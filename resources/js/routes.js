
import Dashboard from './components/Dashboard.vue';
import Categories from './components/Category.vue';


export default[
 {
 	path:'/admin/dashboard',
 	name:'admin.dashboard',
 	component:Dashboard,

 },

 {
 	path:'/admin/categories',
 	name:'categories.index',
 	component:Categories,

 }
]