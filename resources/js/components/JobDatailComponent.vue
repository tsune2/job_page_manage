<template>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id</th>
            <td>{{ job.id }}</td>
        </tr>
        <tr>
            <th>name</th>
            <td>{{ job.name }}</td>
        </tr>
        <tr>
            <th>email</th>
            <td>{{ job.email }}</td>
        </tr>
    </table>
</template>

<script>
    export default {
        data() {
            return {
                job: {}
            }
        },
        mounted() {
            var url = 'api/job/';
            var self = this;
            axios.get(url).then(function(response){
                self.job = response.data;
            });
        }
    }
</script>
