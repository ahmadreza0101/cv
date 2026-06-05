const CleanCSS = require("clean-css");

module.exports = function (eleventyConfig) {
  eleventyConfig.addPassthroughCopy("public");
  eleventyConfig.addPassthroughCopy("thumbnail");
  eleventyConfig.addPassthroughCopy("foto_profil.webp");
  eleventyConfig.addPassthroughCopy("foto_profil-210.webp");
  eleventyConfig.addPassthroughCopy("foto_profil-420.webp");
  eleventyConfig.addPassthroughCopy("foto_profil-630.webp");
  eleventyConfig.addPassthroughCopy("dist");
  eleventyConfig.addPassthroughCopy("dkv");

  eleventyConfig.addFilter("cssmin", function(code) {
    return new CleanCSS({}).minify(code).styles;
  });

  return {
    dir: {
      input: ".",
      includes: "_includes",
      output: "_site"
    }
  };
};
