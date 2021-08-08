export default {
  updateData: (state, payload) => {
    state.data = { ...payload.userData };
  },
  updateInfo: (state, payload) => {
    state.info = { ...payload.userInfo };
  },
  updateHeadings: (state, payload) => {
    let chunk = {
      home: "home",
      about: payload.about.left.title,
      expertise: payload.headings.expertise,
      projects: payload.headings.projects,
      team: payload.headings.team,
      contact: "contact",

    }
    state.headings  = chunk
  }
};
