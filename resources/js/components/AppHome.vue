<template>
  <div class="">
    <toolbar-ku />
    <div class="flex justify-center bg-gray-300">
      <div class="px-48">
        <div class="bg-white px-4 py-2 my-4 rounded-lg text-gray-600 font-normal">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae iste ipsam earum veritatis asperiores tenetur laborum beatae eum magni et!</p>
        </div>
      </div>
    </div>
    <footerku />
  </div>
</template>

<script>
import ToolbarKu from "./Toolbar"
import AppFooter from "./AppFooter"
export default {
  name: "AppHome",
  components: {
    "toolbar-ku": ToolbarKu,
    "footerku": AppFooter,
  },
}
</script>
