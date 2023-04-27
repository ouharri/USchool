import $ from "jquery";

export default ({app}) => {
  window.$ = window.jQuery = app.$ = $;
}
