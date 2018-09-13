<template>
  <div>
    <button @click="getUser">Am I logged in?</button>
    <p v-if="user != []">{{ user.id }} : {{ user.name }}</p>
  </div>
</template>

<script>
export default {
    data() {
        user: []
    },
    methods: {
        getUser: function() {
            axios.get("/api/user").then(res => {
                alert('Welcome, ' + response.data.name + '!!');
                console.log(response.data);
                this.user = response.data;
            })
            .catch(
              alert('Sorry, you are not logged in.')
            );
        },
    }
};
</script>
