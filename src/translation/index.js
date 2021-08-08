import axios from "axios";

let translate = (text) => {
  let newLang = localStorage.getItem("newLang") || "en";
  if (newLang != "en") {
    return axios
      .post("https://glider.monster/api/v1/translate", {
        text: text,
        target: localStorage.getItem("newLang"),
      })
      .then((result) => {
        return result.data[0];
      });
  } else {
    return new Promise((resolve) => {
      resolve(text);
    });
  }
};
export default translate;
