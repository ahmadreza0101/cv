const fs   = require('fs');
const path = require('path');

module.exports = function (eleventyConfig) {
 
  eleventyConfig.addPassthroughCopy("public");
  eleventyConfig.addPassthroughCopy("thumbnail");
  eleventyConfig.addPassthroughCopy("foto_profil.webp");
  eleventyConfig.addPassthroughCopy("dist");
  eleventyConfig.addPassthroughCopy("dkv");


  eleventyConfig.addPassthroughCopy({
    "node_modules/@fontsource/inter/files": "dist/files",
    "node_modules/@fontsource/poppins/files": "dist/files"
  });

 

  return {
    dir: {
      input: ".",
      includes: "_includes",
      output: "_site"
    }
  };
};