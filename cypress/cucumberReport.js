const report = require("multiple-cucumber-html-reporter");

report.generate({
  jsonDir: "./cypress/cucumber-json/",
  reportPath: "./cypress/cucumber-report",
  metadata: {
    browser: {
      name: "chrome",
      version: "60",
    },
    device: "Local test machine",
    platform: {
      name: "ubuntu",
      version: "16.04",
    },
  },
  customData: {
    title: "Run info",
    data: [
      { label: "Project", value: "Entosoft Test" },
      { label: "Release", value: "1.0" },
      { label: "Cycle", value: "B11221.34321" },
      { label: "Start Time", value: "17/09/2024" }
    ],
  },
});

