<template>
    <data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title">
        <template slot-scope="props">
            <tr @click="$router.push('/customer/' + props.item.id)">
                <td>{{props.item.id}}</td>
                <td>{{props.item.company}}</td>
                <td>{{props.item.name}}</td>
                <td>{{props.item.email}}</td>
                <td>{{props.item.created_at}}</td>
            </tr>
        </template>
    </data-viewer>
</template>
<script>
    import DataViewer from '../../components/DataViewer.vue'

    export default {
        name: 'CustomerIndex',
        data() {
            return {
                title: 'Customers',
                source: '/api/customer',
                create: '/customer/create',
                thead: [
                    {title: 'ID', key: 'id', sort: true},
                    {title: 'Company', key: 'company', sort: false},
                    {title: 'Name', key: 'name', sort: false},
                    {title: 'Email Address', key: 'email', sort: false},
                    {title: 'Created At', key: 'created_at', sort: false}
                ],
                filter: [
                    'id', 'company', 'name', 'email', 'phone', 'address'
                ]
            }
        },
        components: {
            DataViewer
        }
    }
</script>