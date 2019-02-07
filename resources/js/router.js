import Vue from 'vue'
import VueRouter from 'vue-router'
import CustomerIndex from './views/customer/index.vue'
import CustomerForm from './views/customer/form.vue'
import CategoryShow from './views/customer/show.vue'
import InvoiceIndex from './views/invoice/index.vue'
import InvoiceForm from './views/invoice/form.vue'
import InvoiceShow from './views/invoice/show.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	routes: [
		{ path: '/', component: CustomerIndex },
		{path: '/customer/create', component: CustomerForm},
    {path: '/customer/:id/edit', component: CustomerForm, meta: {mode: 'edit'}},
    {path: '/customer/:id', component: CategoryShow},

    {path: '/invoice', component: InvoiceIndex},
    {path: '/invoice/create', component: InvoiceForm},
    {path: '/invoice/:id/edit', component: InvoiceForm, meta: {mode: 'edit'}},
    {path: '/invoice/:id', component: InvoiceShow}
	]
})

export default router