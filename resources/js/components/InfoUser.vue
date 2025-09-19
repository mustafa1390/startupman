<!-- views/Login.vue -->
<template>


            <table>

    <tbody>
      <tr>
        <td>نام و نام خانوادگی</td>
        <td>{{ info.fname }}</td>
      </tr>
      <tr>
        <td> نام پدر  </td>
        <td>{{ info.father }}</td>
      </tr>
      <tr>
        <td>  کدملی </td>
        <td>{{ info.codmelli }}</td>
      </tr>
      <tr>
        <td>  شماره همراه </td>
        <td>{{ info.tell }}</td>
      </tr>
      <tr>
        <td>    کد قرعه کشی </td>
        <td>{{ info.id }}</td>
      </tr>
    </tbody>
  </table>

   <span > لطفا تا پایان زمان پیاده روی و قرعه کشی کد قرعه کشی را نزد خود نگهدارید </span>







</template>

<script>


export default {

    props: [  'info'],


}
</script>





<style scoped>
.error {
    color: red;
    margin-top: 5px;
}
</style>



<style>
table {
  width: 60%;
  border-collapse: collapse;
  margin: 20px auto;
}

th, td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: center;
}

th {
  background-color: #f4f4f4;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #f1f1f1;
}

caption {
  caption-side: top;
  font-size: 1.5em;
  margin-bottom: 10px;
}
</style>
