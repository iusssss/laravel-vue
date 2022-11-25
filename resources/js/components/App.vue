<template>
  <div class="container m-5">
    <button class="btn btn-primary" @click="login">Login</button>
  </div>
</template>

<script>
export default {
  setup() {
    async function login() {
      //   await axios.get("/sanctum/csrf-cookie");
      //   await axios.post("/login", {
      //     email: "admin@test.com",
      //     password: "password",
      //   });

      const { data } = await axios.get("/api/user");
      console.log(data);
    }

    return {
      login,
    };
  },
};
</script>

<style scoped>
</style>