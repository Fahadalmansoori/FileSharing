
<template>
  <select name="modules" id="modules" class="form-control">
    <option value>select course</option>
    <option>module.title</option>
  </select>
</template>


<script>
export default {
  data() {
    return {
      initcourses: {
        default: this.courses
      }
    };
  },
  props: ["courses"],
  methods: {
    send() {
      console.log(route("course.index"));
      //   return axios
      //     .get(route("school.courses", { school: 1 }))
      //     .then(response => {
      //       return response.data;
      //     });
    }
  },

  mounted() {
    console.log();
  } // mounted
};
</script>
