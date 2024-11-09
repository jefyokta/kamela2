import { defineConfig } from "vite";

import viteCompression from "vite-plugin-compression";
import path from "path";

export default defineConfig({
  build: {
    minify: "esbuild",
    manifest: true,
    outDir: "public/build",
    rollupOptions: {
      input: {
        app: path.resolve(__dirname, "resources/js/app.js"),
        styles: path.resolve(__dirname, "resources/css/input.css"),
        appcss: path.resolve(__dirname, "resources/css/app.css"),
        three: path.resolve(__dirname, "resources/js/three.js"),
        bootstrap: path.resolve(__dirname, "resources/js/bootstrap.js"),
      },
    },
  },
  publicDir: "resources/static",
  plugins: [viteCompression()],
});
