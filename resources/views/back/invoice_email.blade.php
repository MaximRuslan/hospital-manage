<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<style type="text/css">
		/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #2dcee3;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #ff7588;
  --orange: #ffa87d;
  --yellow: #ffc107;
  --green: #16d39a;
  --teal: #20c997;
  --cyan: #00b5b8;
  --white: #fff;
  --gray: #404e67;
  --gray-dark: #1b2942;
  --primary: #00b5b8;
  --secondary: #404e67;
  --success: #16d39a;
  --info: #2dcee3;
  --warning: #ffa87d;
  --danger: #ff7588;
  --light: #babfc7;
  --dark: #1b2942;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --breakpoint-xxl: 1400px;
  --font-family-sans-serif: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  --font-family-monospace: "Montserrat", Georgia, "Times New Roman", Times, serif; }

*,
*::before,
*::after {
  box-sizing: border-box; }

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.45;
  color: #404e67;
  text-align: left;
  background-color: #f5f7fa; }

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #009c9f;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #008385;
    text-decoration: none; }

a:not([href]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):hover {
    color: inherit;
    text-decoration: none; }

pre,
code,
kbd,
samp {
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #404e67;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

select {
  word-wrap: normal; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
  font-weight: 400;
  line-height: 1.2;
  color: inherit; }

h1, .h1 {
  font-size: 2rem; }

h2, .h2 {
  font-size: 1.74rem; }

h3, .h3 {
  font-size: 1.51rem; }

h4, .h4 {
  font-size: 1.32rem; }

h5, .h5 {
  font-size: 1.14rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 400; }

.display-1 {
  font-size: 6rem;
  font-weight: 400;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 400;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 400;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 400;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #404e67; }
  .blockquote-footer::before {
    content: "\2014\00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #f5f7fa;
  border: 1px solid #ddd;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #404e67; }

code {
  font-size: 90%;
  color: #e83e8c;
  word-wrap: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 90%;
  color: #fff;
  background-color: #f5f7fa;
  border-radius: 0.21rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 90%;
  color: #404e67; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }
  @media (min-width: 1400px) {
    .container {
      max-width: 1340px; } }

.container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px; } }

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px; } }

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px; } }

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px; } }

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1340px; } }

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto, .col-xxl-1, .col-xxl-2, .col-xxl-3, .col-xxl-4, .col-xxl-5, .col-xxl-6, .col-xxl-7, .col-xxl-8, .col-xxl-9, .col-xxl-10, .col-xxl-11, .col-xxl-12, .col-xxl,
.col-xxl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%; }

.row-cols-1 > * {
  flex: 0 0 100%;
  max-width: 100%; }

.row-cols-2 > * {
  flex: 0 0 50%;
  max-width: 50%; }

.row-cols-3 > * {
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.row-cols-4 > * {
  flex: 0 0 25%;
  max-width: 25%; }

.row-cols-5 > * {
  flex: 0 0 20%;
  max-width: 20%; }

.row-cols-6 > * {
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%; }

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  order: -1; }

.order-last {
  order: 13; }

.order-0 {
  order: 0; }

.order-1 {
  order: 1; }

.order-2 {
  order: 2; }

.order-3 {
  order: 3; }

.order-4 {
  order: 4; }

.order-5 {
  order: 5; }

.order-6 {
  order: 6; }

.order-7 {
  order: 7; }

.order-8 {
  order: 8; }

.order-9 {
  order: 9; }

.order-10 {
  order: 10; }

.order-11 {
  order: 11; }

.order-12 {
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-sm-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-sm-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    order: -1; }
  .order-sm-last {
    order: 13; }
  .order-sm-0 {
    order: 0; }
  .order-sm-1 {
    order: 1; }
  .order-sm-2 {
    order: 2; }
  .order-sm-3 {
    order: 3; }
  .order-sm-4 {
    order: 4; }
  .order-sm-5 {
    order: 5; }
  .order-sm-6 {
    order: 6; }
  .order-sm-7 {
    order: 7; }
  .order-sm-8 {
    order: 8; }
  .order-sm-9 {
    order: 9; }
  .order-sm-10 {
    order: 10; }
  .order-sm-11 {
    order: 11; }
  .order-sm-12 {
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .row-cols-md-1 > * {
    flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-md-2 > * {
    flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-md-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-md-4 > * {
    flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-md-5 > * {
    flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-md-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    order: -1; }
  .order-md-last {
    order: 13; }
  .order-md-0 {
    order: 0; }
  .order-md-1 {
    order: 1; }
  .order-md-2 {
    order: 2; }
  .order-md-3 {
    order: 3; }
  .order-md-4 {
    order: 4; }
  .order-md-5 {
    order: 5; }
  .order-md-6 {
    order: 6; }
  .order-md-7 {
    order: 7; }
  .order-md-8 {
    order: 8; }
  .order-md-9 {
    order: 9; }
  .order-md-10 {
    order: 10; }
  .order-md-11 {
    order: 11; }
  .order-md-12 {
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .row-cols-lg-1 > * {
    flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-lg-2 > * {
    flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-lg-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-lg-4 > * {
    flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-lg-5 > * {
    flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-lg-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    order: -1; }
  .order-lg-last {
    order: 13; }
  .order-lg-0 {
    order: 0; }
  .order-lg-1 {
    order: 1; }
  .order-lg-2 {
    order: 2; }
  .order-lg-3 {
    order: 3; }
  .order-lg-4 {
    order: 4; }
  .order-lg-5 {
    order: 5; }
  .order-lg-6 {
    order: 6; }
  .order-lg-7 {
    order: 7; }
  .order-lg-8 {
    order: 8; }
  .order-lg-9 {
    order: 9; }
  .order-lg-10 {
    order: 10; }
  .order-lg-11 {
    order: 11; }
  .order-lg-12 {
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .row-cols-xl-1 > * {
    flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-xl-2 > * {
    flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-xl-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-xl-4 > * {
    flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-xl-5 > * {
    flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-xl-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    order: -1; }
  .order-xl-last {
    order: 13; }
  .order-xl-0 {
    order: 0; }
  .order-xl-1 {
    order: 1; }
  .order-xl-2 {
    order: 2; }
  .order-xl-3 {
    order: 3; }
  .order-xl-4 {
    order: 4; }
  .order-xl-5 {
    order: 5; }
  .order-xl-6 {
    order: 6; }
  .order-xl-7 {
    order: 7; }
  .order-xl-8 {
    order: 8; }
  .order-xl-9 {
    order: 9; }
  .order-xl-10 {
    order: 10; }
  .order-xl-11 {
    order: 11; }
  .order-xl-12 {
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1400px) {
  .col-xxl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .row-cols-xxl-1 > * {
    flex: 0 0 100%;
    max-width: 100%; }
  .row-cols-xxl-2 > * {
    flex: 0 0 50%;
    max-width: 50%; }
  .row-cols-xxl-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .row-cols-xxl-4 > * {
    flex: 0 0 25%;
    max-width: 25%; }
  .row-cols-xxl-5 > * {
    flex: 0 0 20%;
    max-width: 20%; }
  .row-cols-xxl-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-xxl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xxl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xxl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xxl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xxl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xxl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xxl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xxl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xxl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xxl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xxl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xxl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xxl-first {
    order: -1; }
  .order-xxl-last {
    order: 13; }
  .order-xxl-0 {
    order: 0; }
  .order-xxl-1 {
    order: 1; }
  .order-xxl-2 {
    order: 2; }
  .order-xxl-3 {
    order: 3; }
  .order-xxl-4 {
    order: 4; }
  .order-xxl-5 {
    order: 5; }
  .order-xxl-6 {
    order: 6; }
  .order-xxl-7 {
    order: 7; }
  .order-xxl-8 {
    order: 8; }
  .order-xxl-9 {
    order: 9; }
  .order-xxl-10 {
    order: 10; }
  .order-xxl-11 {
    order: 11; }
  .order-xxl-12 {
    order: 12; }
  .offset-xxl-0 {
    margin-left: 0; }
  .offset-xxl-1 {
    margin-left: 8.33333%; }
  .offset-xxl-2 {
    margin-left: 16.66667%; }
  .offset-xxl-3 {
    margin-left: 25%; }
  .offset-xxl-4 {
    margin-left: 33.33333%; }
  .offset-xxl-5 {
    margin-left: 41.66667%; }
  .offset-xxl-6 {
    margin-left: 50%; }
  .offset-xxl-7 {
    margin-left: 58.33333%; }
  .offset-xxl-8 {
    margin-left: 66.66667%; }
  .offset-xxl-9 {
    margin-left: 75%; }
  .offset-xxl-10 {
    margin-left: 83.33333%; }
  .offset-xxl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #404e67;
  background-color: transparent; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #98a4b8; }
  .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #98a4b8; }
  .table tbody + tbody {
    border-top: 2px solid #98a4b8; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #98a4b8; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #98a4b8; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(245, 247, 250, 0.5); }

.table-hover tbody tr:hover {
  color: #404e67;
  background-color: rgba(245, 247, 250, 0.5); }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8eaeb; }

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7ad9da; }

.table-hover .table-primary:hover {
  background-color: #a4e4e5; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #a4e4e5; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #cacdd4; }

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #9ca3b0; }

.table-hover .table-secondary:hover {
  background-color: #bcc0c9; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #bcc0c9; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #bef3e3; }

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #86e8ca; }

.table-hover .table-success:hover {
  background-color: #a8efda; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #a8efda; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #c4f1f7; }

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #92e6f0; }

.table-hover .table-info:hover {
  background-color: #aeecf4; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #aeecf4; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffe7db; }

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffd2bb; }

.table-hover .table-warning:hover {
  background-color: #ffd6c2; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #ffd6c2; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #ffd8de; }

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ffb7c1; }

.table-hover .table-danger:hover {
  background-color: #ffbfc8; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #ffbfc8; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #ecedef; }

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #dbdee2; }

.table-hover .table-light:hover {
  background-color: #dee0e3; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #dee0e3; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #bfc3ca; }

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #88909d; }

.table-hover .table-dark:hover {
  background-color: #b1b6be; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #b1b6be; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(245, 247, 250, 0.5); }

.table-hover .table-active:hover {
  background-color: rgba(228, 233, 242, 0.5); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(228, 233, 242, 0.5); }

.table .thead-dark th {
  color: #f5f7fa;
  background-color: #2a2e30;
  border-color: #3c4244; }

.table .thead-light th {
  color: #4e5154;
  background-color: #98a4b8;
  border-color: #98a4b8; }

.table-dark {
  color: #f5f7fa;
  background-color: #2a2e30; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #3c4244; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    color: #f5f7fa;
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-xxl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control {
  display: block;
  width: 100%;
  height: calc(2.75rem + 2px);
  padding: 0.75rem 1rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.25;
  color: #4e5154;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #babfc7;
  border-radius: 0.25rem;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
  @media (prefers-reduced-motion: reduce) {
    .form-control {
      transition: none; } }
  .form-control::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #4e5154; }
  .form-control:focus {
    color: #4e5154;
    background-color: #fff;
    border-color: #00b5b8;
    outline: 0;
    box-shadow: none; }
  .form-control::placeholder {
    color: #babfc7;
    opacity: 1; }
  .form-control:disabled, .form-control[readonly] {
    background-color: #ECEFF1;
    opacity: 1; }

select.form-control:focus::-ms-value {
  color: #4e5154;
  background-color: #fff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.75rem + 1px);
  padding-bottom: calc(0.75rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.25; }

.col-form-label-lg {
  padding-top: calc(1rem + 1px);
  padding-bottom: calc(1rem + 1px);
  font-size: 1.25rem;
  line-height: 1.25; }

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.75rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.25;
  color: #404e67;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  height: 2.25rem;
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1;
  border-radius: 0.21rem; }

.form-control-lg {
  height: calc(3.5625rem + 2px);
  padding: 1rem 1.25rem;
  font-size: 1.25rem;
  line-height: 1.25;
  border-radius: 0.27rem; }

select.form-control[size], select.form-control[multiple] {
  height: auto; }

textarea.form-control {
  height: auto; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.25rem;
  margin-left: -1.25rem; }
  .form-check-input[disabled] ~ .form-check-label,
  .form-check-input:disabled ~ .form-check-label {
    color: #404e67; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #16d39a; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.45;
  color: #fff;
  background-color: rgba(22, 211, 154, 0.9);
  border-radius: 0.25rem; }

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #16d39a;
  padding-right: 2.75rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2316d39a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.3125em + 0.375rem) center;
  background-size: calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
  .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
    border-color: #16d39a;
    box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.25); }

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: 2.75rem;
  background-position: top calc(0.3125em + 0.375rem) right calc(0.3125em + 0.375rem); }

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #16d39a;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2316d39a' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
  .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #16d39a;
    box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.25); }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #16d39a; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #16d39a; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #16d39a; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #32eab2;
  background-color: #32eab2; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.25); }

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #16d39a; }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #16d39a; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #16d39a;
  box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #ff7588; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.45;
  color: #2a2e30;
  background-color: rgba(255, 117, 136, 0.9);
  border-radius: 0.25rem; }

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #ff7588;
  padding-right: 2.75rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ff7588' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff7588' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.3125em + 0.375rem) center;
  background-size: calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
  .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #ff7588;
    box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.25); }

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: 2.75rem;
  background-position: top calc(0.3125em + 0.375rem) right calc(0.3125em + 0.375rem); }

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #ff7588;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23ff7588' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23ff7588' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.625em + 0.75rem) calc(0.625em + 0.75rem); }
  .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #ff7588;
    box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.25); }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #ff7588; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #ff7588; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #ff7588; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #ffa8b4;
  background-color: #ffa8b4; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.25); }

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #ff7588; }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #ff7588; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #ff7588;
  box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.25); }

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: flex;
      flex: 0 0 auto;
      flex-flow: row wrap;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: flex;
      align-items: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      flex-shrink: 0;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      align-items: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn {
  display: inline-block;
  font-weight: 400;
  color: #404e67;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  line-height: 1.25;
  border-radius: 0.25rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn {
      transition: none; } }
  .btn:hover {
    color: #404e67;
    text-decoration: none; }
  .btn:focus, .btn.focus {
    outline: 0;
    box-shadow: none; }
  .btn.disabled, .btn:disabled {
    opacity: 0.65; }

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none; }

.btn-primary {
  color: #fff;
  background-color: #00b5b8;
  border-color: #00b5b8; }
  .btn-primary:hover {
    color: #fff;
    background-color: #008f92;
    border-color: #008385; }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #008f92;
    border-color: #008385;
    box-shadow: 0 0 0 0.2rem rgba(38, 192, 195, 0.5); }
  .btn-primary.disabled, .btn-primary:disabled {
    color: #fff;
    background-color: #00b5b8;
    border-color: #00b5b8; }
  .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #008385;
    border-color: #007678; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(38, 192, 195, 0.5); }

.btn-secondary {
  color: #fff;
  background-color: #404e67;
  border-color: #404e67; }
  .btn-secondary:hover {
    color: #fff;
    background-color: #313c4f;
    border-color: #2c3648; }
  .btn-secondary:focus, .btn-secondary.focus {
    color: #fff;
    background-color: #313c4f;
    border-color: #2c3648;
    box-shadow: 0 0 0 0.2rem rgba(93, 105, 126, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #fff;
    background-color: #404e67;
    border-color: #404e67; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #2c3648;
    border-color: #283040; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(93, 105, 126, 0.5); }

.btn-success {
  color: #fff;
  background-color: #16d39a;
  border-color: #16d39a; }
  .btn-success:hover {
    color: #fff;
    background-color: #12b081;
    border-color: #11a578; }
  .btn-success:focus, .btn-success.focus {
    color: #fff;
    background-color: #12b081;
    border-color: #11a578;
    box-shadow: 0 0 0 0.2rem rgba(57, 218, 169, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: #16d39a;
    border-color: #16d39a; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #11a578;
    border-color: #109970; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(57, 218, 169, 0.5); }

.btn-info {
  color: #2a2e30;
  background-color: #2dcee3;
  border-color: #2dcee3; }
  .btn-info:hover {
    color: #fff;
    background-color: #1cbace;
    border-color: #1ab0c3; }
  .btn-info:focus, .btn-info.focus {
    color: #fff;
    background-color: #1cbace;
    border-color: #1ab0c3;
    box-shadow: 0 0 0 0.2rem rgba(45, 182, 200, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #2a2e30;
    background-color: #2dcee3;
    border-color: #2dcee3; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #1ab0c3;
    border-color: #19a5b8; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(45, 182, 200, 0.5); }

.btn-warning {
  color: #2a2e30;
  background-color: #ffa87d;
  border-color: #ffa87d; }
  .btn-warning:hover {
    color: #2a2e30;
    background-color: #ff8e57;
    border-color: #ff864a; }
  .btn-warning:focus, .btn-warning.focus {
    color: #2a2e30;
    background-color: #ff8e57;
    border-color: #ff864a;
    box-shadow: 0 0 0 0.2rem rgba(223, 150, 113, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #2a2e30;
    background-color: #ffa87d;
    border-color: #ffa87d; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #2a2e30;
    background-color: #ff864a;
    border-color: #ff7d3d; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(223, 150, 113, 0.5); }

.btn-danger {
  color: #2a2e30;
  background-color: #ff7588;
  border-color: #ff7588; }
  .btn-danger:hover {
    color: #fff;
    background-color: #ff4f67;
    border-color: #ff425c; }
  .btn-danger:focus, .btn-danger.focus {
    color: #fff;
    background-color: #ff4f67;
    border-color: #ff425c;
    box-shadow: 0 0 0 0.2rem rgba(223, 106, 123, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #2a2e30;
    background-color: #ff7588;
    border-color: #ff7588; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff425c;
    border-color: #ff3551; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(223, 106, 123, 0.5); }

.btn-light {
  color: #2a2e30;
  background-color: #babfc7;
  border-color: #babfc7; }
  .btn-light:hover {
    color: #2a2e30;
    background-color: #a5abb6;
    border-color: #9ea5b0; }
  .btn-light:focus, .btn-light.focus {
    color: #2a2e30;
    background-color: #a5abb6;
    border-color: #9ea5b0;
    box-shadow: 0 0 0 0.2rem rgba(164, 169, 176, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #2a2e30;
    background-color: #babfc7;
    border-color: #babfc7; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #2a2e30;
    background-color: #9ea5b0;
    border-color: #979eaa; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(164, 169, 176, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #1b2942;
  border-color: #1b2942; }
  .btn-dark:hover {
    color: #fff;
    background-color: #101827;
    border-color: #0c131e; }
  .btn-dark:focus, .btn-dark.focus {
    color: #fff;
    background-color: #101827;
    border-color: #0c131e;
    box-shadow: 0 0 0 0.2rem rgba(61, 73, 94, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #1b2942;
    border-color: #1b2942; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #0c131e;
    border-color: #080d15; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(61, 73, 94, 0.5); }

.btn-outline-primary {
  color: #00b5b8;
  border-color: #00b5b8; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #00b5b8;
    border-color: #00b5b8; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 181, 184, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #00b5b8;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #00b5b8;
    border-color: #00b5b8; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 181, 184, 0.5); }

.btn-outline-secondary {
  color: #404e67;
  border-color: #404e67; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #404e67;
    border-color: #404e67; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 0.2rem rgba(64, 78, 103, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #404e67;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #404e67;
    border-color: #404e67; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(64, 78, 103, 0.5); }

.btn-outline-success {
  color: #16d39a;
  border-color: #16d39a; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #16d39a;
    border-color: #16d39a; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #16d39a;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #16d39a;
    border-color: #16d39a; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.5); }

.btn-outline-info {
  color: #2dcee3;
  border-color: #2dcee3; }
  .btn-outline-info:hover {
    color: #2a2e30;
    background-color: #2dcee3;
    border-color: #2dcee3; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 0.2rem rgba(45, 206, 227, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #2dcee3;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #2a2e30;
    background-color: #2dcee3;
    border-color: #2dcee3; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(45, 206, 227, 0.5); }

.btn-outline-warning {
  color: #ffa87d;
  border-color: #ffa87d; }
  .btn-outline-warning:hover {
    color: #2a2e30;
    background-color: #ffa87d;
    border-color: #ffa87d; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 168, 125, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffa87d;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #2a2e30;
    background-color: #ffa87d;
    border-color: #ffa87d; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 168, 125, 0.5); }

.btn-outline-danger {
  color: #ff7588;
  border-color: #ff7588; }
  .btn-outline-danger:hover {
    color: #2a2e30;
    background-color: #ff7588;
    border-color: #ff7588; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff7588;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #2a2e30;
    background-color: #ff7588;
    border-color: #ff7588; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.5); }

.btn-outline-light {
  color: #babfc7;
  border-color: #babfc7; }
  .btn-outline-light:hover {
    color: #2a2e30;
    background-color: #babfc7;
    border-color: #babfc7; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #babfc7;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #2a2e30;
    background-color: #babfc7;
    border-color: #babfc7; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }

.btn-outline-dark {
  color: #1b2942;
  border-color: #1b2942; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #1b2942;
    border-color: #1b2942; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    box-shadow: 0 0 0 0.2rem rgba(27, 41, 66, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #1b2942;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #1b2942;
    border-color: #1b2942; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(27, 41, 66, 0.5); }

.btn-link {
  font-weight: 400;
  color: #009c9f;
  text-decoration: none; }
  .btn-link:hover {
    color: #008385;
    text-decoration: none; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: none;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #404e67;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn {
  padding: 1rem 1.25rem;
  font-size: 1.25rem;
  line-height: 1.25;
  border-radius: 0.27rem; }

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1;
  border-radius: 0.21rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #404e67;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }

.dropdown-menu-left {
  right: auto;
  left: 0; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0; }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0; }
  .dropdown-menu-md-right {
    right: 0;
    left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0; }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0; }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto; } }

@media (min-width: 1400px) {
  .dropdown-menu-xxl-left {
    right: auto;
    left: 0; }
  .dropdown-menu-xxl-right {
    right: 0;
    left: auto; } }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid rgba(0, 0, 0, 0.15); }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #2a2e30;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #1e2122;
    text-decoration: none;
    background-color: #f5f7fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #00b5b8; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #404e67;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #404e67;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #2a2e30; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    flex: 1 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
      z-index: 1; }

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.9375rem;
  padding-left: 0.9375rem; }

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center; }
  .btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control,
  .input-group > .form-control-plaintext,
  .input-group > .custom-select,
  .input-group > .custom-file {
    position: relative;
    flex: 1 1 0%;
    min-width: 0;
    margin-bottom: 0; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:focus,
  .input-group > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3; }
  .input-group > .custom-file .custom-file-input:focus {
    z-index: 4; }
  .input-group > .form-control:not(:last-child),
  .input-group > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child),
  .input-group > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .input-group > .custom-file {
    display: flex;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: flex; }
  .input-group-prepend .btn,
  .input-group-append .btn {
    position: relative;
    z-index: 2; }
    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
      z-index: 3; }
  .input-group-prepend .btn + .btn,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-append .btn + .btn,
  .input-group-append .btn + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.75rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.25;
  color: #4e5154;
  text-align: center;
  white-space: nowrap;
  background-color: #f5f7fa;
  border: 1px solid #babfc7;
  border-radius: 0.25rem; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(3.5625rem + 2px); }

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 1rem 1.25rem;
  font-size: 1.25rem;
  line-height: 1.25;
  border-radius: 0.27rem; }

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: 2.25rem; }

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1;
  border-radius: 0.21rem; }

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem; }

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.45rem;
  padding-left: 2.5rem; }

.custom-control-inline {
  display: inline-flex;
  margin-right: 1.1rem; }

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.225rem;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #00b5b8;
    background-color: #00b5b8; }
  .custom-control-input:focus ~ .custom-control-label::before {
    box-shadow: 0 0 0 1px #f5f7fa, none; }
  .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #00b5b8; }
  .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #6cfdff;
    border-color: #6cfdff; }
  .custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
    color: #404e67; }
    .custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #ECEFF1; }

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top; }
  .custom-control-label::before {
    position: absolute;
    top: 0.225rem;
    left: -2.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #ddd;
    border: #adb5bd solid 1px; }
  .custom-control-label::after {
    position: absolute;
    top: 0.225rem;
    left: -2.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #00b5b8;
  background-color: #00b5b8; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 181, 184, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 181, 184, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 181, 184, 0.5); }

.custom-switch {
  padding-left: 3.25rem; }
  .custom-switch .custom-control-label::before {
    left: -3.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem; }
  .custom-switch .custom-control-label::after {
    top: calc(0.225rem + 2px);
    left: calc(-3.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .custom-switch .custom-control-label::after {
        transition: none; } }
  .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #ddd;
    transform: translateX(0.75rem); }
  .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(0, 181, 184, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(2.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.25;
  color: #4e5154;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23333' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center/8px 10px;
  border: 1px solid #babfc7;
  border-radius: 0.25rem;
  appearance: none; }
  .custom-select:focus {
    border-color: #39fcff;
    outline: 0;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(57, 252, 255, 0.5); }
    .custom-select:focus::-ms-value {
      color: #4e5154;
      background-color: #fff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #404e67;
    background-color: #98a4b8; }
  .custom-select::-ms-expand {
    display: none; }
  .custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #4e5154; }

.custom-select-sm {
  height: 2.25rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 75%; }

.custom-select-lg {
  height: calc(3.5625rem + 2px);
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 1.25rem;
  font-size: 125%; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(2.75rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(2.75rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #00b5b8;
    box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #00b5b8; }
  .custom-file-input[disabled] ~ .custom-file-label,
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #ECEFF1; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }
  .custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse); }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(2.75rem + 2px);
  padding: 0.75rem 1rem;
  font-weight: 400;
  line-height: 1.25;
  color: #4e5154;
  background-color: #fff;
  border: 1px solid #babfc7;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.75rem;
    padding: 0.75rem 1rem;
    line-height: 1.25;
    color: #4e5154;
    content: "Browse";
    background-color: #f5f7fa;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0; }

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  appearance: none; }
  .custom-range:focus {
    outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
      box-shadow: 0 0 0 1px #f5f7fa, none; }
    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #f5f7fa, none; }
    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #f5f7fa, none; }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #00b5b8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
      background-color: #6cfdff; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #626e82;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #00b5b8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        transition: none; } }
    .custom-range::-moz-range-thumb:active {
      background-color: #6cfdff; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #626e82;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #00b5b8;
    border: 0;
    border-radius: 1rem;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        transition: none; } }
    .custom-range::-ms-thumb:active {
      background-color: #6cfdff; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #626e82;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #626e82;
    border-radius: 1rem; }
  .custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default; }
  .custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-moz-range-track {
    cursor: default; }
  .custom-range:disabled::-ms-thumb {
    background-color: #adb5bd; }

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      transition: none; } }

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #404e67;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #ddd; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #98a4b8 #98a4b8 #ddd; }
    .nav-tabs .nav-link.disabled {
      color: #404e67;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #4e5154;
    background-color: #f5f7fa;
    border-color: #ddd #ddd transparent; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #00b5b8; }

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar .container,
  .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl, .navbar .container-xxl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.31875rem;
  padding-bottom: 0.31875rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl, .navbar-expand-sm > .container-xxl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl, .navbar-expand-sm > .container-xxl {
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl, .navbar-expand-md > .container-xxl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl, .navbar-expand-md > .container-xxl {
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl, .navbar-expand-lg > .container-xxl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl, .navbar-expand-lg > .container-xxl {
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl, .navbar-expand-xl > .container-xxl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl, .navbar-expand-xl > .container-xxl {
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

@media (max-width: 1399.98px) {
  .navbar-expand-xxl > .container,
  .navbar-expand-xxl > .container-fluid, .navbar-expand-xxl > .container-sm, .navbar-expand-xxl > .container-md, .navbar-expand-xxl > .container-lg, .navbar-expand-xxl > .container-xl, .navbar-expand-xxl > .container-xxl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xxl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xxl > .container,
    .navbar-expand-xxl > .container-fluid, .navbar-expand-xxl > .container-sm, .navbar-expand-xxl > .container-md, .navbar-expand-xxl > .container-lg, .navbar-expand-xxl > .container-xl, .navbar-expand-xxl > .container-xxl {
      flex-wrap: nowrap; }
    .navbar-expand-xxl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xxl .navbar-toggler {
      display: none; } }

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl, .navbar-expand > .container-xxl {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl, .navbar-expand > .container-xxl {
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: #1b2942; }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: #1b2942; }

.navbar-light .navbar-nav .nav-link {
  color: #404e67; }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: #626e82; }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: #f5f7fa; }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: #1b2942; }

.navbar-light .navbar-toggler {
  color: #404e67;
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23404e67' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: #404e67; }
  .navbar-light .navbar-text a {
    color: #1b2942; }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: #1b2942; }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: white; }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.9); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.5); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: white;
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

.navbar-dark .navbar-text {
  color: white; }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 0.25rem; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }

.card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.5rem; }

.card-title {
  margin-bottom: 1.5rem; }

.card-subtitle {
  margin-top: -0.75rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.5rem; }

.card-header {
  padding: 1.5rem 1.5rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 1px solid rgba(0, 0, 0, 0.06); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 1.5rem 1.5rem;
  background-color: #fff;
  border-top: 1px solid rgba(0, 0, 0, 0.06); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.75rem;
  margin-bottom: -1.5rem;
  margin-left: -0.75rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.75rem;
  margin-left: -0.75rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img,
.card-img-top,
.card-img-bottom {
  flex-shrink: 0;
  width: 100%; }

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck .card {
  margin-bottom: 15px; }

@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px; }
    .card-deck .card {
      flex: 1 0 0%;
      margin-right: 15px;
      margin-bottom: 0;
      margin-left: 15px; } }

.card-group > .card {
  margin-bottom: 15px; }

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap; }
    .card-group > .card {
      flex: 1 0 0%;
      margin-bottom: 0; }
      .card-group > .card + .card {
        margin-left: 0;
        border-left: 0; }
      .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
          border-top-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
          border-bottom-right-radius: 0; }
      .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
          border-top-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
          border-bottom-left-radius: 0; } }

.card-columns .card {
  margin-bottom: 1.5rem; }

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion > .card {
  overflow: hidden; }
  .accordion > .card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .accordion > .card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .accordion > .card > .card-header {
    border-radius: 0;
    margin-bottom: -1px; }

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.75rem 0rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #98a4b8;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #404e67;
    content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #404e67; }

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #009c9f;
  background-color: #fff;
  border: 1px solid #ddd; }
  .page-link:hover {
    z-index: 2;
    color: #008385;
    text-decoration: none;
    background-color: #f5f7fa;
    border-color: #ddd; }
  .page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: none; }

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #00b5b8;
  border-color: #00b5b8; }

.page-item.disabled .page-link {
  color: #cfd8dc;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #cfd8dc; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.25; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.27rem;
  border-bottom-left-radius: 0.27rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.27rem;
  border-bottom-right-radius: 0.27rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.21rem;
  border-bottom-left-radius: 0.21rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.21rem;
  border-bottom-right-radius: 0.21rem; }

.badge {
  display: inline-block;
  padding: 0.35em 0.4em;
  font-size: 85%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .badge {
      transition: none; } }
  a.badge:hover, a.badge:focus {
    text-decoration: none; }
  .badge:empty {
    display: none; }

.btn .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #fff;
  background-color: #00b5b8; }
  a.badge-primary:hover, a.badge-primary:focus {
    color: #fff;
    background-color: #008385; }
  a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 181, 184, 0.5); }

.badge-secondary {
  color: #fff;
  background-color: #404e67; }
  a.badge-secondary:hover, a.badge-secondary:focus {
    color: #fff;
    background-color: #2c3648; }
  a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(64, 78, 103, 0.5); }

.badge-success {
  color: #fff;
  background-color: #16d39a; }
  a.badge-success:hover, a.badge-success:focus {
    color: #fff;
    background-color: #11a578; }
  a.badge-success:focus, a.badge-success.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(22, 211, 154, 0.5); }

.badge-info {
  color: #2a2e30;
  background-color: #2dcee3; }
  a.badge-info:hover, a.badge-info:focus {
    color: #2a2e30;
    background-color: #1ab0c3; }
  a.badge-info:focus, a.badge-info.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(45, 206, 227, 0.5); }

.badge-warning {
  color: #2a2e30;
  background-color: #ffa87d; }
  a.badge-warning:hover, a.badge-warning:focus {
    color: #2a2e30;
    background-color: #ff864a; }
  a.badge-warning:focus, a.badge-warning.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 168, 125, 0.5); }

.badge-danger {
  color: #2a2e30;
  background-color: #ff7588; }
  a.badge-danger:hover, a.badge-danger:focus {
    color: #2a2e30;
    background-color: #ff425c; }
  a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(255, 117, 136, 0.5); }

.badge-light {
  color: #2a2e30;
  background-color: #babfc7; }
  a.badge-light:hover, a.badge-light:focus {
    color: #2a2e30;
    background-color: #9ea5b0; }
  a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(186, 191, 199, 0.5); }

.badge-dark {
  color: #fff;
  background-color: #1b2942; }
  a.badge-dark:hover, a.badge-dark:focus {
    color: #fff;
    background-color: #0c131e; }
  a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(27, 41, 66, 0.5); }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #98a4b8;
  border-radius: 0.27rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #005e60;
  background-color: #ccf0f1;
  border-color: #b8eaeb; }
  .alert-primary hr {
    border-top-color: #a4e4e5; }
  .alert-primary .alert-link {
    color: #002c2d; }

.alert-secondary {
  color: #212936;
  background-color: #d9dce1;
  border-color: #cacdd4; }
  .alert-secondary hr {
    border-top-color: #bcc0c9; }
  .alert-secondary .alert-link {
    color: #0e1116; }

.alert-success {
  color: #0b6e50;
  background-color: #d0f6eb;
  border-color: #bef3e3; }
  .alert-success hr {
    border-top-color: #a8efda; }
  .alert-success .alert-link {
    color: #06402e; }

.alert-info {
  color: #176b76;
  background-color: #d5f5f9;
  border-color: #c4f1f7; }
  .alert-info hr {
    border-top-color: #aeecf4; }
  .alert-info .alert-link {
    color: #0f444b; }

.alert-warning {
  color: #855741;
  background-color: #ffeee5;
  border-color: #ffe7db; }
  .alert-warning hr {
    border-top-color: #ffd6c2; }
  .alert-warning .alert-link {
    color: #634130; }

.alert-danger {
  color: #853d47;
  background-color: #ffe3e7;
  border-color: #ffd8de; }
  .alert-danger hr {
    border-top-color: #ffbfc8; }
  .alert-danger .alert-link {
    color: #622d34; }

.alert-light {
  color: #616367;
  background-color: #f1f2f4;
  border-color: #ecedef; }
  .alert-light hr {
    border-top-color: #dee0e3; }
  .alert-light .alert-link {
    color: #484a4d; }

.alert-dark {
  color: #0e1522;
  background-color: #d1d4d9;
  border-color: #bfc3ca; }
  .alert-dark hr {
    border-top-color: #b1b6be; }
  .alert-dark .alert-link {
    color: black; }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #eee;
  border-radius: 0.25rem; }

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #00b5b8;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      transition: none; } }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      animation: none; } }

.media {
  display: flex;
  align-items: flex-start; }

.media-body {
  flex: 1; }

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #4e5154;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #4e5154;
    text-decoration: none;
    background-color: #f5f7fa; }
  .list-group-item-action:active {
    color: #404e67;
    background-color: #98a4b8; }

.list-group-item {
  position: relative;
  display: block;
  padding: 1.25rem 1.25rem;
  background-color: #fff;
  border: 1px solid #e4e7ed; }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #404e67;
    pointer-events: none;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #00b5b8;
    border-color: #00b5b8; }
  .list-group-item + .list-group-item {
    border-top-width: 0; }
    .list-group-item + .list-group-item.active {
      margin-top: -1px;
      border-top-width: 1px; }

.list-group-horizontal {
  flex-direction: row; }
  .list-group-horizontal .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0; }
  .list-group-horizontal .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0; }
  .list-group-horizontal .list-group-item.active {
    margin-top: 0; }
  .list-group-horizontal .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0; }
    .list-group-horizontal .list-group-item + .list-group-item.active {
      margin-left: -1px;
      border-left-width: 1px; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row; }
    .list-group-horizontal-sm .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-sm .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-sm .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-sm .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-sm .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row; }
    .list-group-horizontal-md .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-md .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-md .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-md .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-md .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row; }
    .list-group-horizontal-lg .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-lg .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-lg .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-lg .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-lg .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row; }
    .list-group-horizontal-xl .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xl .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xl .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xl .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xl .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row; }
    .list-group-horizontal-xxl .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xxl .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xxl .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xxl .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xxl .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

.list-group-flush .list-group-item {
  border-right-width: 0;
  border-left-width: 0;
  border-radius: 0; }
  .list-group-flush .list-group-item:first-child {
    border-top-width: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom-width: 0; }

.list-group-item-primary {
  color: #005e60;
  background-color: #b8eaeb; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #005e60;
    background-color: #a4e4e5; }
  .list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #005e60;
    border-color: #005e60; }

.list-group-item-secondary {
  color: #212936;
  background-color: #cacdd4; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #212936;
    background-color: #bcc0c9; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #212936;
    border-color: #212936; }

.list-group-item-success {
  color: #0b6e50;
  background-color: #bef3e3; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #0b6e50;
    background-color: #a8efda; }
  .list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #0b6e50;
    border-color: #0b6e50; }

.list-group-item-info {
  color: #176b76;
  background-color: #c4f1f7; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #176b76;
    background-color: #aeecf4; }
  .list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #176b76;
    border-color: #176b76; }

.list-group-item-warning {
  color: #855741;
  background-color: #ffe7db; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #855741;
    background-color: #ffd6c2; }
  .list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #855741;
    border-color: #855741; }

.list-group-item-danger {
  color: #853d47;
  background-color: #ffd8de; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #853d47;
    background-color: #ffbfc8; }
  .list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #853d47;
    border-color: #853d47; }

.list-group-item-light {
  color: #616367;
  background-color: #ecedef; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #616367;
    background-color: #dee0e3; }
  .list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #616367;
    border-color: #616367; }

.list-group-item-dark {
  color: #0e1522;
  background-color: #bfc3ca; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #0e1522;
    background-color: #b1b6be; }
  .list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #0e1522;
    border-color: #0e1522; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover {
    color: #000;
    text-decoration: none; }
  .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  appearance: none; }

a.close.disabled {
  pointer-events: none; }

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem; }
  .toast:not(:last-child) {
    margin-bottom: 0.75rem; }
  .toast.showing {
    opacity: 1; }
  .toast.show {
    display: block;
    opacity: 1; }
  .toast.hide {
    display: none; }

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #404e67;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

.toast-body {
  padding: 0.75rem; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        transition: none; } }
  .modal.show .modal-dialog {
    transform: none; }
  .modal.modal-static .modal-dialog {
    transform: scale(1.02); }

.modal-dialog-scrollable {
  display: flex;
  max-height: calc(100% - 1rem); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden; }
  .modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    flex-shrink: 0; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: ""; }
  .modal-dialog-centered.modal-dialog-scrollable {
    flex-direction: column;
    justify-content: center;
    height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none; }

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.27rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #ECEFF1;
  border-top-left-radius: calc(0.27rem - 1px);
  border-top-right-radius: calc(0.27rem - 1px); }
  .modal-header .close {
    padding: 1rem;
    margin: -1rem -1rem -1rem auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.45; }

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem; }

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #ECEFF1;
  border-bottom-right-radius: calc(0.27rem - 1px);
  border-bottom-left-radius: calc(0.27rem - 1px); }
  .modal-footer > * {
    margin: 0.25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto; }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem); }
    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 3.5rem); }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem); }
    .modal-dialog-centered::before {
      height: calc(100vh - 3.5rem); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.45;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.45;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.27rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.27rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc(-0.5rem - 1px); }
    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.27rem 0; }
    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc(-0.5rem - 1px); }
    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc(-0.5rem - 1px);
    width: 0.5rem;
    height: 1rem;
    margin: 0.27rem 0; }
    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  color: inherit;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.27rem - 1px);
  border-top-right-radius: calc(0.27rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #404e67; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  transform: translateX(-100%); }

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    box-sizing: content-box;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

@keyframes spinner-border {
  to {
    transform: rotate(360deg); } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: spinner-border .75s linear infinite; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@keyframes spinner-grow {
  0% {
    transform: scale(0); }
  50% {
    opacity: 1; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: spinner-grow .75s linear infinite; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #00b5b8 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #008385 !important; }

.bg-secondary {
  background-color: #404e67 !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #2c3648 !important; }

.bg-success {
  background-color: #16d39a !important; }

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #11a578 !important; }

.bg-info {
  background-color: #2dcee3 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #1ab0c3 !important; }

.bg-warning {
  background-color: #ffa87d !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ff864a !important; }

.bg-danger {
  background-color: #ff7588 !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ff425c !important; }

.bg-light {
  background-color: #babfc7 !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #9ea5b0 !important; }

.bg-dark {
  background-color: #1b2942 !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #0c131e !important; }

.bg-white {
  background-color: #fff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border {
  border: 1px solid #E6E6E6 !important; }

.border-top {
  border-top: 1px solid #E6E6E6 !important; }

.border-right {
  border-right: 1px solid #E6E6E6 !important; }

.border-bottom {
  border-bottom: 1px solid #E6E6E6 !important; }

.border-left {
  border-left: 1px solid #E6E6E6 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #00b5b8 !important; }

.border-secondary {
  border-color: #404e67 !important; }

.border-success {
  border-color: #16d39a !important; }

.border-info {
  border-color: #2dcee3 !important; }

.border-warning {
  border-color: #ffa87d !important; }

.border-danger {
  border-color: #ff7588 !important; }

.border-light {
  border-color: #babfc7 !important; }

.border-dark {
  border-color: #1b2942 !important; }

.border-white {
  border-color: #fff !important; }

.rounded-sm {
  border-radius: 0.21rem !important; }

.rounded {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-lg {
  border-radius: 0.27rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1400px) {
  .d-xxl-none {
    display: none !important; }
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: flex !important; }
  .d-xxl-inline-flex {
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: flex !important; }
  .d-print-inline-flex {
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  flex: 1 1 auto !important; }

.flex-grow-0 {
  flex-grow: 0 !important; }

.flex-grow-1 {
  flex-grow: 1 !important; }

.flex-shrink-0 {
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  flex-shrink: 1 !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

@media (min-width: 1400px) {
  .flex-xxl-row {
    flex-direction: row !important; }
  .flex-xxl-column {
    flex-direction: column !important; }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xxl-wrap {
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .flex-xxl-fill {
    flex: 1 1 auto !important; }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important; }
  .justify-content-xxl-start {
    justify-content: flex-start !important; }
  .justify-content-xxl-end {
    justify-content: flex-end !important; }
  .justify-content-xxl-center {
    justify-content: center !important; }
  .justify-content-xxl-between {
    justify-content: space-between !important; }
  .justify-content-xxl-around {
    justify-content: space-around !important; }
  .align-items-xxl-start {
    align-items: flex-start !important; }
  .align-items-xxl-end {
    align-items: flex-end !important; }
  .align-items-xxl-center {
    align-items: center !important; }
  .align-items-xxl-baseline {
    align-items: baseline !important; }
  .align-items-xxl-stretch {
    align-items: stretch !important; }
  .align-content-xxl-start {
    align-content: flex-start !important; }
  .align-content-xxl-end {
    align-content: flex-end !important; }
  .align-content-xxl-center {
    align-content: center !important; }
  .align-content-xxl-between {
    align-content: space-between !important; }
  .align-content-xxl-around {
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    align-content: stretch !important; }
  .align-self-xxl-auto {
    align-self: auto !important; }
  .align-self-xxl-start {
    align-self: flex-start !important; }
  .align-self-xxl-end {
    align-self: flex-end !important; }
  .align-self-xxl-center {
    align-self: center !important; }
  .align-self-xxl-baseline {
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

@media (min-width: 1400px) {
  .float-xxl-left {
    float: left !important; }
  .float-xxl-right {
    float: right !important; }
  .float-xxl-none {
    float: none !important; } }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: sticky !important; }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1038; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1038; }

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.vw-100 {
  width: 100vw !important; }

.vh-100 {
  height: 100vh !important; }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0); }

.m-0 {
  margin: 0 !important; }

.mt-0,
.my-0 {
  margin-top: 0 !important; }

.mr-0,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 1rem !important; }

.mt-1,
.my-1 {
  margin-top: 1rem !important; }

.mr-1,
.mx-1 {
  margin-right: 1rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 1rem !important; }

.ml-1,
.mx-1 {
  margin-left: 1rem !important; }

.m-2 {
  margin: 1.5rem !important; }

.mt-2,
.my-2 {
  margin-top: 1.5rem !important; }

.mr-2,
.mx-2 {
  margin-right: 1.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 1.5rem !important; }

.ml-2,
.mx-2 {
  margin-left: 1.5rem !important; }

.m-3 {
  margin: 3rem !important; }

.mt-3,
.my-3 {
  margin-top: 3rem !important; }

.mr-3,
.mx-3 {
  margin-right: 3rem !important; }

.mb-3,
.my-3 {
  margin-bottom: 3rem !important; }

.ml-3,
.mx-3 {
  margin-left: 3rem !important; }

.m-4 {
  margin: 3.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 3.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 3.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 3.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 3.5rem !important; }

.m-5 {
  margin: 4rem !important; }

.mt-5,
.my-5 {
  margin-top: 4rem !important; }

.mr-5,
.mx-5 {
  margin-right: 4rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 4rem !important; }

.ml-5,
.mx-5 {
  margin-left: 4rem !important; }

.m-25 {
  margin: 0.25rem !important; }

.mt-25,
.my-25 {
  margin-top: 0.25rem !important; }

.mr-25,
.mx-25 {
  margin-right: 0.25rem !important; }

.mb-25,
.my-25 {
  margin-bottom: 0.25rem !important; }

.ml-25,
.mx-25 {
  margin-left: 0.25rem !important; }

.m-50 {
  margin: 0.5rem !important; }

.mt-50,
.my-50 {
  margin-top: 0.5rem !important; }

.mr-50,
.mx-50 {
  margin-right: 0.5rem !important; }

.mb-50,
.my-50 {
  margin-bottom: 0.5rem !important; }

.ml-50,
.mx-50 {
  margin-left: 0.5rem !important; }

.m-75 {
  margin: 0.75rem !important; }

.mt-75,
.my-75 {
  margin-top: 0.75rem !important; }

.mr-75,
.mx-75 {
  margin-right: 0.75rem !important; }

.mb-75,
.my-75 {
  margin-bottom: 0.75rem !important; }

.ml-75,
.mx-75 {
  margin-left: 0.75rem !important; }

.p-0 {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 1rem !important; }

.pt-1,
.py-1 {
  padding-top: 1rem !important; }

.pr-1,
.px-1 {
  padding-right: 1rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 1rem !important; }

.pl-1,
.px-1 {
  padding-left: 1rem !important; }

.p-2 {
  padding: 1.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 1.5rem !important; }

.pr-2,
.px-2 {
  padding-right: 1.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 1.5rem !important; }

.pl-2,
.px-2 {
  padding-left: 1.5rem !important; }

.p-3 {
  padding: 3rem !important; }

.pt-3,
.py-3 {
  padding-top: 3rem !important; }

.pr-3,
.px-3 {
  padding-right: 3rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 3rem !important; }

.pl-3,
.px-3 {
  padding-left: 3rem !important; }

.p-4 {
  padding: 3.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 3.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 3.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 3.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 3.5rem !important; }

.p-5 {
  padding: 4rem !important; }

.pt-5,
.py-5 {
  padding-top: 4rem !important; }

.pr-5,
.px-5 {
  padding-right: 4rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 4rem !important; }

.pl-5,
.px-5 {
  padding-left: 4rem !important; }

.p-25 {
  padding: 0.25rem !important; }

.pt-25,
.py-25 {
  padding-top: 0.25rem !important; }

.pr-25,
.px-25 {
  padding-right: 0.25rem !important; }

.pb-25,
.py-25 {
  padding-bottom: 0.25rem !important; }

.pl-25,
.px-25 {
  padding-left: 0.25rem !important; }

.p-50 {
  padding: 0.5rem !important; }

.pt-50,
.py-50 {
  padding-top: 0.5rem !important; }

.pr-50,
.px-50 {
  padding-right: 0.5rem !important; }

.pb-50,
.py-50 {
  padding-bottom: 0.5rem !important; }

.pl-50,
.px-50 {
  padding-left: 0.5rem !important; }

.p-75 {
  padding: 0.75rem !important; }

.pt-75,
.py-75 {
  padding-top: 0.75rem !important; }

.pr-75,
.px-75 {
  padding-right: 0.75rem !important; }

.pb-75,
.py-75 {
  padding-bottom: 0.75rem !important; }

.pl-75,
.px-75 {
  padding-left: 0.75rem !important; }

.m-n1 {
  margin: -1rem !important; }

.mt-n1,
.my-n1 {
  margin-top: -1rem !important; }

.mr-n1,
.mx-n1 {
  margin-right: -1rem !important; }

.mb-n1,
.my-n1 {
  margin-bottom: -1rem !important; }

.ml-n1,
.mx-n1 {
  margin-left: -1rem !important; }

.m-n2 {
  margin: -1.5rem !important; }

.mt-n2,
.my-n2 {
  margin-top: -1.5rem !important; }

.mr-n2,
.mx-n2 {
  margin-right: -1.5rem !important; }

.mb-n2,
.my-n2 {
  margin-bottom: -1.5rem !important; }

.ml-n2,
.mx-n2 {
  margin-left: -1.5rem !important; }

.m-n3 {
  margin: -3rem !important; }

.mt-n3,
.my-n3 {
  margin-top: -3rem !important; }

.mr-n3,
.mx-n3 {
  margin-right: -3rem !important; }

.mb-n3,
.my-n3 {
  margin-bottom: -3rem !important; }

.ml-n3,
.mx-n3 {
  margin-left: -3rem !important; }

.m-n4 {
  margin: -3.5rem !important; }

.mt-n4,
.my-n4 {
  margin-top: -3.5rem !important; }

.mr-n4,
.mx-n4 {
  margin-right: -3.5rem !important; }

.mb-n4,
.my-n4 {
  margin-bottom: -3.5rem !important; }

.ml-n4,
.mx-n4 {
  margin-left: -3.5rem !important; }

.m-n5 {
  margin: -4rem !important; }

.mt-n5,
.my-n5 {
  margin-top: -4rem !important; }

.mr-n5,
.mx-n5 {
  margin-right: -4rem !important; }

.mb-n5,
.my-n5 {
  margin-bottom: -4rem !important; }

.ml-n5,
.mx-n5 {
  margin-left: -4rem !important; }

.m-n25 {
  margin: -0.25rem !important; }

.mt-n25,
.my-n25 {
  margin-top: -0.25rem !important; }

.mr-n25,
.mx-n25 {
  margin-right: -0.25rem !important; }

.mb-n25,
.my-n25 {
  margin-bottom: -0.25rem !important; }

.ml-n25,
.mx-n25 {
  margin-left: -0.25rem !important; }

.m-n50 {
  margin: -0.5rem !important; }

.mt-n50,
.my-n50 {
  margin-top: -0.5rem !important; }

.mr-n50,
.mx-n50 {
  margin-right: -0.5rem !important; }

.mb-n50,
.my-n50 {
  margin-bottom: -0.5rem !important; }

.ml-n50,
.mx-n50 {
  margin-left: -0.5rem !important; }

.m-n75 {
  margin: -0.75rem !important; }

.mt-n75,
.my-n75 {
  margin-top: -0.75rem !important; }

.mr-n75,
.mx-n75 {
  margin-right: -0.75rem !important; }

.mb-n75,
.my-n75 {
  margin-bottom: -0.75rem !important; }

.ml-n75,
.mx-n75 {
  margin-left: -0.75rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 1rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 1rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 1rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 1rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 1rem !important; }
  .m-sm-2 {
    margin: 1.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 1.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 1.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 1.5rem !important; }
  .m-sm-3 {
    margin: 3rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 3rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 3rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 3rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 3rem !important; }
  .m-sm-4 {
    margin: 3.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 3.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 3.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 3.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 3.5rem !important; }
  .m-sm-5 {
    margin: 4rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 4rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 4rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 4rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 4rem !important; }
  .m-sm-25 {
    margin: 0.25rem !important; }
  .mt-sm-25,
  .my-sm-25 {
    margin-top: 0.25rem !important; }
  .mr-sm-25,
  .mx-sm-25 {
    margin-right: 0.25rem !important; }
  .mb-sm-25,
  .my-sm-25 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-25,
  .mx-sm-25 {
    margin-left: 0.25rem !important; }
  .m-sm-50 {
    margin: 0.5rem !important; }
  .mt-sm-50,
  .my-sm-50 {
    margin-top: 0.5rem !important; }
  .mr-sm-50,
  .mx-sm-50 {
    margin-right: 0.5rem !important; }
  .mb-sm-50,
  .my-sm-50 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-50,
  .mx-sm-50 {
    margin-left: 0.5rem !important; }
  .m-sm-75 {
    margin: 0.75rem !important; }
  .mt-sm-75,
  .my-sm-75 {
    margin-top: 0.75rem !important; }
  .mr-sm-75,
  .mx-sm-75 {
    margin-right: 0.75rem !important; }
  .mb-sm-75,
  .my-sm-75 {
    margin-bottom: 0.75rem !important; }
  .ml-sm-75,
  .mx-sm-75 {
    margin-left: 0.75rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 1rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 1rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 1rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 1rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 1rem !important; }
  .p-sm-2 {
    padding: 1.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 1.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 1.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 1.5rem !important; }
  .p-sm-3 {
    padding: 3rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 3rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 3rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 3rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 3rem !important; }
  .p-sm-4 {
    padding: 3.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 3.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 3.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 3.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 3.5rem !important; }
  .p-sm-5 {
    padding: 4rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 4rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 4rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 4rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 4rem !important; }
  .p-sm-25 {
    padding: 0.25rem !important; }
  .pt-sm-25,
  .py-sm-25 {
    padding-top: 0.25rem !important; }
  .pr-sm-25,
  .px-sm-25 {
    padding-right: 0.25rem !important; }
  .pb-sm-25,
  .py-sm-25 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-25,
  .px-sm-25 {
    padding-left: 0.25rem !important; }
  .p-sm-50 {
    padding: 0.5rem !important; }
  .pt-sm-50,
  .py-sm-50 {
    padding-top: 0.5rem !important; }
  .pr-sm-50,
  .px-sm-50 {
    padding-right: 0.5rem !important; }
  .pb-sm-50,
  .py-sm-50 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-50,
  .px-sm-50 {
    padding-left: 0.5rem !important; }
  .p-sm-75 {
    padding: 0.75rem !important; }
  .pt-sm-75,
  .py-sm-75 {
    padding-top: 0.75rem !important; }
  .pr-sm-75,
  .px-sm-75 {
    padding-right: 0.75rem !important; }
  .pb-sm-75,
  .py-sm-75 {
    padding-bottom: 0.75rem !important; }
  .pl-sm-75,
  .px-sm-75 {
    padding-left: 0.75rem !important; }
  .m-sm-n1 {
    margin: -1rem !important; }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -1rem !important; }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -1rem !important; }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -1rem !important; }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -1rem !important; }
  .m-sm-n2 {
    margin: -1.5rem !important; }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -1.5rem !important; }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -1.5rem !important; }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -1.5rem !important; }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -1.5rem !important; }
  .m-sm-n3 {
    margin: -3rem !important; }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -3rem !important; }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -3rem !important; }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -3rem !important; }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -3rem !important; }
  .m-sm-n4 {
    margin: -3.5rem !important; }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -3.5rem !important; }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -3.5rem !important; }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -3.5rem !important; }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -3.5rem !important; }
  .m-sm-n5 {
    margin: -4rem !important; }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -4rem !important; }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -4rem !important; }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -4rem !important; }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -4rem !important; }
  .m-sm-n25 {
    margin: -0.25rem !important; }
  .mt-sm-n25,
  .my-sm-n25 {
    margin-top: -0.25rem !important; }
  .mr-sm-n25,
  .mx-sm-n25 {
    margin-right: -0.25rem !important; }
  .mb-sm-n25,
  .my-sm-n25 {
    margin-bottom: -0.25rem !important; }
  .ml-sm-n25,
  .mx-sm-n25 {
    margin-left: -0.25rem !important; }
  .m-sm-n50 {
    margin: -0.5rem !important; }
  .mt-sm-n50,
  .my-sm-n50 {
    margin-top: -0.5rem !important; }
  .mr-sm-n50,
  .mx-sm-n50 {
    margin-right: -0.5rem !important; }
  .mb-sm-n50,
  .my-sm-n50 {
    margin-bottom: -0.5rem !important; }
  .ml-sm-n50,
  .mx-sm-n50 {
    margin-left: -0.5rem !important; }
  .m-sm-n75 {
    margin: -0.75rem !important; }
  .mt-sm-n75,
  .my-sm-n75 {
    margin-top: -0.75rem !important; }
  .mr-sm-n75,
  .mx-sm-n75 {
    margin-right: -0.75rem !important; }
  .mb-sm-n75,
  .my-sm-n75 {
    margin-bottom: -0.75rem !important; }
  .ml-sm-n75,
  .mx-sm-n75 {
    margin-left: -0.75rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 1rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 1rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 1rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 1rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 1rem !important; }
  .m-md-2 {
    margin: 1.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 1.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 1.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 1.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 1.5rem !important; }
  .m-md-3 {
    margin: 3rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 3rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 3rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 3rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 3rem !important; }
  .m-md-4 {
    margin: 3.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 3.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 3.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 3.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 3.5rem !important; }
  .m-md-5 {
    margin: 4rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 4rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 4rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 4rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 4rem !important; }
  .m-md-25 {
    margin: 0.25rem !important; }
  .mt-md-25,
  .my-md-25 {
    margin-top: 0.25rem !important; }
  .mr-md-25,
  .mx-md-25 {
    margin-right: 0.25rem !important; }
  .mb-md-25,
  .my-md-25 {
    margin-bottom: 0.25rem !important; }
  .ml-md-25,
  .mx-md-25 {
    margin-left: 0.25rem !important; }
  .m-md-50 {
    margin: 0.5rem !important; }
  .mt-md-50,
  .my-md-50 {
    margin-top: 0.5rem !important; }
  .mr-md-50,
  .mx-md-50 {
    margin-right: 0.5rem !important; }
  .mb-md-50,
  .my-md-50 {
    margin-bottom: 0.5rem !important; }
  .ml-md-50,
  .mx-md-50 {
    margin-left: 0.5rem !important; }
  .m-md-75 {
    margin: 0.75rem !important; }
  .mt-md-75,
  .my-md-75 {
    margin-top: 0.75rem !important; }
  .mr-md-75,
  .mx-md-75 {
    margin-right: 0.75rem !important; }
  .mb-md-75,
  .my-md-75 {
    margin-bottom: 0.75rem !important; }
  .ml-md-75,
  .mx-md-75 {
    margin-left: 0.75rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 1rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 1rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 1rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 1rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 1rem !important; }
  .p-md-2 {
    padding: 1.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 1.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 1.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 1.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 1.5rem !important; }
  .p-md-3 {
    padding: 3rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 3rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 3rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 3rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 3rem !important; }
  .p-md-4 {
    padding: 3.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 3.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 3.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 3.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 3.5rem !important; }
  .p-md-5 {
    padding: 4rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 4rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 4rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 4rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 4rem !important; }
  .p-md-25 {
    padding: 0.25rem !important; }
  .pt-md-25,
  .py-md-25 {
    padding-top: 0.25rem !important; }
  .pr-md-25,
  .px-md-25 {
    padding-right: 0.25rem !important; }
  .pb-md-25,
  .py-md-25 {
    padding-bottom: 0.25rem !important; }
  .pl-md-25,
  .px-md-25 {
    padding-left: 0.25rem !important; }
  .p-md-50 {
    padding: 0.5rem !important; }
  .pt-md-50,
  .py-md-50 {
    padding-top: 0.5rem !important; }
  .pr-md-50,
  .px-md-50 {
    padding-right: 0.5rem !important; }
  .pb-md-50,
  .py-md-50 {
    padding-bottom: 0.5rem !important; }
  .pl-md-50,
  .px-md-50 {
    padding-left: 0.5rem !important; }
  .p-md-75 {
    padding: 0.75rem !important; }
  .pt-md-75,
  .py-md-75 {
    padding-top: 0.75rem !important; }
  .pr-md-75,
  .px-md-75 {
    padding-right: 0.75rem !important; }
  .pb-md-75,
  .py-md-75 {
    padding-bottom: 0.75rem !important; }
  .pl-md-75,
  .px-md-75 {
    padding-left: 0.75rem !important; }
  .m-md-n1 {
    margin: -1rem !important; }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -1rem !important; }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -1rem !important; }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -1rem !important; }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -1rem !important; }
  .m-md-n2 {
    margin: -1.5rem !important; }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -1.5rem !important; }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -1.5rem !important; }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -1.5rem !important; }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -1.5rem !important; }
  .m-md-n3 {
    margin: -3rem !important; }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -3rem !important; }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -3rem !important; }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -3rem !important; }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -3rem !important; }
  .m-md-n4 {
    margin: -3.5rem !important; }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -3.5rem !important; }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -3.5rem !important; }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -3.5rem !important; }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -3.5rem !important; }
  .m-md-n5 {
    margin: -4rem !important; }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -4rem !important; }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -4rem !important; }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -4rem !important; }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -4rem !important; }
  .m-md-n25 {
    margin: -0.25rem !important; }
  .mt-md-n25,
  .my-md-n25 {
    margin-top: -0.25rem !important; }
  .mr-md-n25,
  .mx-md-n25 {
    margin-right: -0.25rem !important; }
  .mb-md-n25,
  .my-md-n25 {
    margin-bottom: -0.25rem !important; }
  .ml-md-n25,
  .mx-md-n25 {
    margin-left: -0.25rem !important; }
  .m-md-n50 {
    margin: -0.5rem !important; }
  .mt-md-n50,
  .my-md-n50 {
    margin-top: -0.5rem !important; }
  .mr-md-n50,
  .mx-md-n50 {
    margin-right: -0.5rem !important; }
  .mb-md-n50,
  .my-md-n50 {
    margin-bottom: -0.5rem !important; }
  .ml-md-n50,
  .mx-md-n50 {
    margin-left: -0.5rem !important; }
  .m-md-n75 {
    margin: -0.75rem !important; }
  .mt-md-n75,
  .my-md-n75 {
    margin-top: -0.75rem !important; }
  .mr-md-n75,
  .mx-md-n75 {
    margin-right: -0.75rem !important; }
  .mb-md-n75,
  .my-md-n75 {
    margin-bottom: -0.75rem !important; }
  .ml-md-n75,
  .mx-md-n75 {
    margin-left: -0.75rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 1rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 1rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 1rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 1rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 1rem !important; }
  .m-lg-2 {
    margin: 1.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 1.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 1.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 1.5rem !important; }
  .m-lg-3 {
    margin: 3rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 3rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 3rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 3rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 3rem !important; }
  .m-lg-4 {
    margin: 3.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 3.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 3.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 3.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 3.5rem !important; }
  .m-lg-5 {
    margin: 4rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 4rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 4rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 4rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 4rem !important; }
  .m-lg-25 {
    margin: 0.25rem !important; }
  .mt-lg-25,
  .my-lg-25 {
    margin-top: 0.25rem !important; }
  .mr-lg-25,
  .mx-lg-25 {
    margin-right: 0.25rem !important; }
  .mb-lg-25,
  .my-lg-25 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-25,
  .mx-lg-25 {
    margin-left: 0.25rem !important; }
  .m-lg-50 {
    margin: 0.5rem !important; }
  .mt-lg-50,
  .my-lg-50 {
    margin-top: 0.5rem !important; }
  .mr-lg-50,
  .mx-lg-50 {
    margin-right: 0.5rem !important; }
  .mb-lg-50,
  .my-lg-50 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-50,
  .mx-lg-50 {
    margin-left: 0.5rem !important; }
  .m-lg-75 {
    margin: 0.75rem !important; }
  .mt-lg-75,
  .my-lg-75 {
    margin-top: 0.75rem !important; }
  .mr-lg-75,
  .mx-lg-75 {
    margin-right: 0.75rem !important; }
  .mb-lg-75,
  .my-lg-75 {
    margin-bottom: 0.75rem !important; }
  .ml-lg-75,
  .mx-lg-75 {
    margin-left: 0.75rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 1rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 1rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 1rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 1rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 1rem !important; }
  .p-lg-2 {
    padding: 1.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 1.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 1.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 1.5rem !important; }
  .p-lg-3 {
    padding: 3rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 3rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 3rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 3rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 3rem !important; }
  .p-lg-4 {
    padding: 3.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 3.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 3.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 3.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 3.5rem !important; }
  .p-lg-5 {
    padding: 4rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 4rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 4rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 4rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 4rem !important; }
  .p-lg-25 {
    padding: 0.25rem !important; }
  .pt-lg-25,
  .py-lg-25 {
    padding-top: 0.25rem !important; }
  .pr-lg-25,
  .px-lg-25 {
    padding-right: 0.25rem !important; }
  .pb-lg-25,
  .py-lg-25 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-25,
  .px-lg-25 {
    padding-left: 0.25rem !important; }
  .p-lg-50 {
    padding: 0.5rem !important; }
  .pt-lg-50,
  .py-lg-50 {
    padding-top: 0.5rem !important; }
  .pr-lg-50,
  .px-lg-50 {
    padding-right: 0.5rem !important; }
  .pb-lg-50,
  .py-lg-50 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-50,
  .px-lg-50 {
    padding-left: 0.5rem !important; }
  .p-lg-75 {
    padding: 0.75rem !important; }
  .pt-lg-75,
  .py-lg-75 {
    padding-top: 0.75rem !important; }
  .pr-lg-75,
  .px-lg-75 {
    padding-right: 0.75rem !important; }
  .pb-lg-75,
  .py-lg-75 {
    padding-bottom: 0.75rem !important; }
  .pl-lg-75,
  .px-lg-75 {
    padding-left: 0.75rem !important; }
  .m-lg-n1 {
    margin: -1rem !important; }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -1rem !important; }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -1rem !important; }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -1rem !important; }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -1rem !important; }
  .m-lg-n2 {
    margin: -1.5rem !important; }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -1.5rem !important; }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -1.5rem !important; }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -1.5rem !important; }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -1.5rem !important; }
  .m-lg-n3 {
    margin: -3rem !important; }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -3rem !important; }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -3rem !important; }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -3rem !important; }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -3rem !important; }
  .m-lg-n4 {
    margin: -3.5rem !important; }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -3.5rem !important; }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -3.5rem !important; }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -3.5rem !important; }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -3.5rem !important; }
  .m-lg-n5 {
    margin: -4rem !important; }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -4rem !important; }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -4rem !important; }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -4rem !important; }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -4rem !important; }
  .m-lg-n25 {
    margin: -0.25rem !important; }
  .mt-lg-n25,
  .my-lg-n25 {
    margin-top: -0.25rem !important; }
  .mr-lg-n25,
  .mx-lg-n25 {
    margin-right: -0.25rem !important; }
  .mb-lg-n25,
  .my-lg-n25 {
    margin-bottom: -0.25rem !important; }
  .ml-lg-n25,
  .mx-lg-n25 {
    margin-left: -0.25rem !important; }
  .m-lg-n50 {
    margin: -0.5rem !important; }
  .mt-lg-n50,
  .my-lg-n50 {
    margin-top: -0.5rem !important; }
  .mr-lg-n50,
  .mx-lg-n50 {
    margin-right: -0.5rem !important; }
  .mb-lg-n50,
  .my-lg-n50 {
    margin-bottom: -0.5rem !important; }
  .ml-lg-n50,
  .mx-lg-n50 {
    margin-left: -0.5rem !important; }
  .m-lg-n75 {
    margin: -0.75rem !important; }
  .mt-lg-n75,
  .my-lg-n75 {
    margin-top: -0.75rem !important; }
  .mr-lg-n75,
  .mx-lg-n75 {
    margin-right: -0.75rem !important; }
  .mb-lg-n75,
  .my-lg-n75 {
    margin-bottom: -0.75rem !important; }
  .ml-lg-n75,
  .mx-lg-n75 {
    margin-left: -0.75rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 1rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 1rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 1rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 1rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 1rem !important; }
  .m-xl-2 {
    margin: 1.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 1.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 1.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 1.5rem !important; }
  .m-xl-3 {
    margin: 3rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 3rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 3rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 3rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 3rem !important; }
  .m-xl-4 {
    margin: 3.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 3.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 3.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 3.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 3.5rem !important; }
  .m-xl-5 {
    margin: 4rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 4rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 4rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 4rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 4rem !important; }
  .m-xl-25 {
    margin: 0.25rem !important; }
  .mt-xl-25,
  .my-xl-25 {
    margin-top: 0.25rem !important; }
  .mr-xl-25,
  .mx-xl-25 {
    margin-right: 0.25rem !important; }
  .mb-xl-25,
  .my-xl-25 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-25,
  .mx-xl-25 {
    margin-left: 0.25rem !important; }
  .m-xl-50 {
    margin: 0.5rem !important; }
  .mt-xl-50,
  .my-xl-50 {
    margin-top: 0.5rem !important; }
  .mr-xl-50,
  .mx-xl-50 {
    margin-right: 0.5rem !important; }
  .mb-xl-50,
  .my-xl-50 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-50,
  .mx-xl-50 {
    margin-left: 0.5rem !important; }
  .m-xl-75 {
    margin: 0.75rem !important; }
  .mt-xl-75,
  .my-xl-75 {
    margin-top: 0.75rem !important; }
  .mr-xl-75,
  .mx-xl-75 {
    margin-right: 0.75rem !important; }
  .mb-xl-75,
  .my-xl-75 {
    margin-bottom: 0.75rem !important; }
  .ml-xl-75,
  .mx-xl-75 {
    margin-left: 0.75rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 1rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 1rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 1rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 1rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 1rem !important; }
  .p-xl-2 {
    padding: 1.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 1.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 1.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 1.5rem !important; }
  .p-xl-3 {
    padding: 3rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 3rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 3rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 3rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 3rem !important; }
  .p-xl-4 {
    padding: 3.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 3.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 3.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 3.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 3.5rem !important; }
  .p-xl-5 {
    padding: 4rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 4rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 4rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 4rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 4rem !important; }
  .p-xl-25 {
    padding: 0.25rem !important; }
  .pt-xl-25,
  .py-xl-25 {
    padding-top: 0.25rem !important; }
  .pr-xl-25,
  .px-xl-25 {
    padding-right: 0.25rem !important; }
  .pb-xl-25,
  .py-xl-25 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-25,
  .px-xl-25 {
    padding-left: 0.25rem !important; }
  .p-xl-50 {
    padding: 0.5rem !important; }
  .pt-xl-50,
  .py-xl-50 {
    padding-top: 0.5rem !important; }
  .pr-xl-50,
  .px-xl-50 {
    padding-right: 0.5rem !important; }
  .pb-xl-50,
  .py-xl-50 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-50,
  .px-xl-50 {
    padding-left: 0.5rem !important; }
  .p-xl-75 {
    padding: 0.75rem !important; }
  .pt-xl-75,
  .py-xl-75 {
    padding-top: 0.75rem !important; }
  .pr-xl-75,
  .px-xl-75 {
    padding-right: 0.75rem !important; }
  .pb-xl-75,
  .py-xl-75 {
    padding-bottom: 0.75rem !important; }
  .pl-xl-75,
  .px-xl-75 {
    padding-left: 0.75rem !important; }
  .m-xl-n1 {
    margin: -1rem !important; }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -1rem !important; }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -1rem !important; }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -1rem !important; }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -1rem !important; }
  .m-xl-n2 {
    margin: -1.5rem !important; }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -1.5rem !important; }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -1.5rem !important; }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -1.5rem !important; }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -1.5rem !important; }
  .m-xl-n3 {
    margin: -3rem !important; }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -3rem !important; }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -3rem !important; }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -3rem !important; }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -3rem !important; }
  .m-xl-n4 {
    margin: -3.5rem !important; }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -3.5rem !important; }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -3.5rem !important; }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -3.5rem !important; }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -3.5rem !important; }
  .m-xl-n5 {
    margin: -4rem !important; }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -4rem !important; }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -4rem !important; }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -4rem !important; }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -4rem !important; }
  .m-xl-n25 {
    margin: -0.25rem !important; }
  .mt-xl-n25,
  .my-xl-n25 {
    margin-top: -0.25rem !important; }
  .mr-xl-n25,
  .mx-xl-n25 {
    margin-right: -0.25rem !important; }
  .mb-xl-n25,
  .my-xl-n25 {
    margin-bottom: -0.25rem !important; }
  .ml-xl-n25,
  .mx-xl-n25 {
    margin-left: -0.25rem !important; }
  .m-xl-n50 {
    margin: -0.5rem !important; }
  .mt-xl-n50,
  .my-xl-n50 {
    margin-top: -0.5rem !important; }
  .mr-xl-n50,
  .mx-xl-n50 {
    margin-right: -0.5rem !important; }
  .mb-xl-n50,
  .my-xl-n50 {
    margin-bottom: -0.5rem !important; }
  .ml-xl-n50,
  .mx-xl-n50 {
    margin-left: -0.5rem !important; }
  .m-xl-n75 {
    margin: -0.75rem !important; }
  .mt-xl-n75,
  .my-xl-n75 {
    margin-top: -0.75rem !important; }
  .mr-xl-n75,
  .mx-xl-n75 {
    margin-right: -0.75rem !important; }
  .mb-xl-n75,
  .my-xl-n75 {
    margin-bottom: -0.75rem !important; }
  .ml-xl-n75,
  .mx-xl-n75 {
    margin-left: -0.75rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

@media (min-width: 1400px) {
  .m-xxl-0 {
    margin: 0 !important; }
  .mt-xxl-0,
  .my-xxl-0 {
    margin-top: 0 !important; }
  .mr-xxl-0,
  .mx-xxl-0 {
    margin-right: 0 !important; }
  .mb-xxl-0,
  .my-xxl-0 {
    margin-bottom: 0 !important; }
  .ml-xxl-0,
  .mx-xxl-0 {
    margin-left: 0 !important; }
  .m-xxl-1 {
    margin: 1rem !important; }
  .mt-xxl-1,
  .my-xxl-1 {
    margin-top: 1rem !important; }
  .mr-xxl-1,
  .mx-xxl-1 {
    margin-right: 1rem !important; }
  .mb-xxl-1,
  .my-xxl-1 {
    margin-bottom: 1rem !important; }
  .ml-xxl-1,
  .mx-xxl-1 {
    margin-left: 1rem !important; }
  .m-xxl-2 {
    margin: 1.5rem !important; }
  .mt-xxl-2,
  .my-xxl-2 {
    margin-top: 1.5rem !important; }
  .mr-xxl-2,
  .mx-xxl-2 {
    margin-right: 1.5rem !important; }
  .mb-xxl-2,
  .my-xxl-2 {
    margin-bottom: 1.5rem !important; }
  .ml-xxl-2,
  .mx-xxl-2 {
    margin-left: 1.5rem !important; }
  .m-xxl-3 {
    margin: 3rem !important; }
  .mt-xxl-3,
  .my-xxl-3 {
    margin-top: 3rem !important; }
  .mr-xxl-3,
  .mx-xxl-3 {
    margin-right: 3rem !important; }
  .mb-xxl-3,
  .my-xxl-3 {
    margin-bottom: 3rem !important; }
  .ml-xxl-3,
  .mx-xxl-3 {
    margin-left: 3rem !important; }
  .m-xxl-4 {
    margin: 3.5rem !important; }
  .mt-xxl-4,
  .my-xxl-4 {
    margin-top: 3.5rem !important; }
  .mr-xxl-4,
  .mx-xxl-4 {
    margin-right: 3.5rem !important; }
  .mb-xxl-4,
  .my-xxl-4 {
    margin-bottom: 3.5rem !important; }
  .ml-xxl-4,
  .mx-xxl-4 {
    margin-left: 3.5rem !important; }
  .m-xxl-5 {
    margin: 4rem !important; }
  .mt-xxl-5,
  .my-xxl-5 {
    margin-top: 4rem !important; }
  .mr-xxl-5,
  .mx-xxl-5 {
    margin-right: 4rem !important; }
  .mb-xxl-5,
  .my-xxl-5 {
    margin-bottom: 4rem !important; }
  .ml-xxl-5,
  .mx-xxl-5 {
    margin-left: 4rem !important; }
  .m-xxl-25 {
    margin: 0.25rem !important; }
  .mt-xxl-25,
  .my-xxl-25 {
    margin-top: 0.25rem !important; }
  .mr-xxl-25,
  .mx-xxl-25 {
    margin-right: 0.25rem !important; }
  .mb-xxl-25,
  .my-xxl-25 {
    margin-bottom: 0.25rem !important; }
  .ml-xxl-25,
  .mx-xxl-25 {
    margin-left: 0.25rem !important; }
  .m-xxl-50 {
    margin: 0.5rem !important; }
  .mt-xxl-50,
  .my-xxl-50 {
    margin-top: 0.5rem !important; }
  .mr-xxl-50,
  .mx-xxl-50 {
    margin-right: 0.5rem !important; }
  .mb-xxl-50,
  .my-xxl-50 {
    margin-bottom: 0.5rem !important; }
  .ml-xxl-50,
  .mx-xxl-50 {
    margin-left: 0.5rem !important; }
  .m-xxl-75 {
    margin: 0.75rem !important; }
  .mt-xxl-75,
  .my-xxl-75 {
    margin-top: 0.75rem !important; }
  .mr-xxl-75,
  .mx-xxl-75 {
    margin-right: 0.75rem !important; }
  .mb-xxl-75,
  .my-xxl-75 {
    margin-bottom: 0.75rem !important; }
  .ml-xxl-75,
  .mx-xxl-75 {
    margin-left: 0.75rem !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .pt-xxl-0,
  .py-xxl-0 {
    padding-top: 0 !important; }
  .pr-xxl-0,
  .px-xxl-0 {
    padding-right: 0 !important; }
  .pb-xxl-0,
  .py-xxl-0 {
    padding-bottom: 0 !important; }
  .pl-xxl-0,
  .px-xxl-0 {
    padding-left: 0 !important; }
  .p-xxl-1 {
    padding: 1rem !important; }
  .pt-xxl-1,
  .py-xxl-1 {
    padding-top: 1rem !important; }
  .pr-xxl-1,
  .px-xxl-1 {
    padding-right: 1rem !important; }
  .pb-xxl-1,
  .py-xxl-1 {
    padding-bottom: 1rem !important; }
  .pl-xxl-1,
  .px-xxl-1 {
    padding-left: 1rem !important; }
  .p-xxl-2 {
    padding: 1.5rem !important; }
  .pt-xxl-2,
  .py-xxl-2 {
    padding-top: 1.5rem !important; }
  .pr-xxl-2,
  .px-xxl-2 {
    padding-right: 1.5rem !important; }
  .pb-xxl-2,
  .py-xxl-2 {
    padding-bottom: 1.5rem !important; }
  .pl-xxl-2,
  .px-xxl-2 {
    padding-left: 1.5rem !important; }
  .p-xxl-3 {
    padding: 3rem !important; }
  .pt-xxl-3,
  .py-xxl-3 {
    padding-top: 3rem !important; }
  .pr-xxl-3,
  .px-xxl-3 {
    padding-right: 3rem !important; }
  .pb-xxl-3,
  .py-xxl-3 {
    padding-bottom: 3rem !important; }
  .pl-xxl-3,
  .px-xxl-3 {
    padding-left: 3rem !important; }
  .p-xxl-4 {
    padding: 3.5rem !important; }
  .pt-xxl-4,
  .py-xxl-4 {
    padding-top: 3.5rem !important; }
  .pr-xxl-4,
  .px-xxl-4 {
    padding-right: 3.5rem !important; }
  .pb-xxl-4,
  .py-xxl-4 {
    padding-bottom: 3.5rem !important; }
  .pl-xxl-4,
  .px-xxl-4 {
    padding-left: 3.5rem !important; }
  .p-xxl-5 {
    padding: 4rem !important; }
  .pt-xxl-5,
  .py-xxl-5 {
    padding-top: 4rem !important; }
  .pr-xxl-5,
  .px-xxl-5 {
    padding-right: 4rem !important; }
  .pb-xxl-5,
  .py-xxl-5 {
    padding-bottom: 4rem !important; }
  .pl-xxl-5,
  .px-xxl-5 {
    padding-left: 4rem !important; }
  .p-xxl-25 {
    padding: 0.25rem !important; }
  .pt-xxl-25,
  .py-xxl-25 {
    padding-top: 0.25rem !important; }
  .pr-xxl-25,
  .px-xxl-25 {
    padding-right: 0.25rem !important; }
  .pb-xxl-25,
  .py-xxl-25 {
    padding-bottom: 0.25rem !important; }
  .pl-xxl-25,
  .px-xxl-25 {
    padding-left: 0.25rem !important; }
  .p-xxl-50 {
    padding: 0.5rem !important; }
  .pt-xxl-50,
  .py-xxl-50 {
    padding-top: 0.5rem !important; }
  .pr-xxl-50,
  .px-xxl-50 {
    padding-right: 0.5rem !important; }
  .pb-xxl-50,
  .py-xxl-50 {
    padding-bottom: 0.5rem !important; }
  .pl-xxl-50,
  .px-xxl-50 {
    padding-left: 0.5rem !important; }
  .p-xxl-75 {
    padding: 0.75rem !important; }
  .pt-xxl-75,
  .py-xxl-75 {
    padding-top: 0.75rem !important; }
  .pr-xxl-75,
  .px-xxl-75 {
    padding-right: 0.75rem !important; }
  .pb-xxl-75,
  .py-xxl-75 {
    padding-bottom: 0.75rem !important; }
  .pl-xxl-75,
  .px-xxl-75 {
    padding-left: 0.75rem !important; }
  .m-xxl-n1 {
    margin: -1rem !important; }
  .mt-xxl-n1,
  .my-xxl-n1 {
    margin-top: -1rem !important; }
  .mr-xxl-n1,
  .mx-xxl-n1 {
    margin-right: -1rem !important; }
  .mb-xxl-n1,
  .my-xxl-n1 {
    margin-bottom: -1rem !important; }
  .ml-xxl-n1,
  .mx-xxl-n1 {
    margin-left: -1rem !important; }
  .m-xxl-n2 {
    margin: -1.5rem !important; }
  .mt-xxl-n2,
  .my-xxl-n2 {
    margin-top: -1.5rem !important; }
  .mr-xxl-n2,
  .mx-xxl-n2 {
    margin-right: -1.5rem !important; }
  .mb-xxl-n2,
  .my-xxl-n2 {
    margin-bottom: -1.5rem !important; }
  .ml-xxl-n2,
  .mx-xxl-n2 {
    margin-left: -1.5rem !important; }
  .m-xxl-n3 {
    margin: -3rem !important; }
  .mt-xxl-n3,
  .my-xxl-n3 {
    margin-top: -3rem !important; }
  .mr-xxl-n3,
  .mx-xxl-n3 {
    margin-right: -3rem !important; }
  .mb-xxl-n3,
  .my-xxl-n3 {
    margin-bottom: -3rem !important; }
  .ml-xxl-n3,
  .mx-xxl-n3 {
    margin-left: -3rem !important; }
  .m-xxl-n4 {
    margin: -3.5rem !important; }
  .mt-xxl-n4,
  .my-xxl-n4 {
    margin-top: -3.5rem !important; }
  .mr-xxl-n4,
  .mx-xxl-n4 {
    margin-right: -3.5rem !important; }
  .mb-xxl-n4,
  .my-xxl-n4 {
    margin-bottom: -3.5rem !important; }
  .ml-xxl-n4,
  .mx-xxl-n4 {
    margin-left: -3.5rem !important; }
  .m-xxl-n5 {
    margin: -4rem !important; }
  .mt-xxl-n5,
  .my-xxl-n5 {
    margin-top: -4rem !important; }
  .mr-xxl-n5,
  .mx-xxl-n5 {
    margin-right: -4rem !important; }
  .mb-xxl-n5,
  .my-xxl-n5 {
    margin-bottom: -4rem !important; }
  .ml-xxl-n5,
  .mx-xxl-n5 {
    margin-left: -4rem !important; }
  .m-xxl-n25 {
    margin: -0.25rem !important; }
  .mt-xxl-n25,
  .my-xxl-n25 {
    margin-top: -0.25rem !important; }
  .mr-xxl-n25,
  .mx-xxl-n25 {
    margin-right: -0.25rem !important; }
  .mb-xxl-n25,
  .my-xxl-n25 {
    margin-bottom: -0.25rem !important; }
  .ml-xxl-n25,
  .mx-xxl-n25 {
    margin-left: -0.25rem !important; }
  .m-xxl-n50 {
    margin: -0.5rem !important; }
  .mt-xxl-n50,
  .my-xxl-n50 {
    margin-top: -0.5rem !important; }
  .mr-xxl-n50,
  .mx-xxl-n50 {
    margin-right: -0.5rem !important; }
  .mb-xxl-n50,
  .my-xxl-n50 {
    margin-bottom: -0.5rem !important; }
  .ml-xxl-n50,
  .mx-xxl-n50 {
    margin-left: -0.5rem !important; }
  .m-xxl-n75 {
    margin: -0.75rem !important; }
  .mt-xxl-n75,
  .my-xxl-n75 {
    margin-top: -0.75rem !important; }
  .mr-xxl-n75,
  .mx-xxl-n75 {
    margin-right: -0.75rem !important; }
  .mb-xxl-n75,
  .my-xxl-n75 {
    margin-bottom: -0.75rem !important; }
  .ml-xxl-n75,
  .mx-xxl-n75 {
    margin-left: -0.75rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mt-xxl-auto,
  .my-xxl-auto {
    margin-top: auto !important; }
  .mr-xxl-auto,
  .mx-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-auto,
  .my-xxl-auto {
    margin-bottom: auto !important; }
  .ml-xxl-auto,
  .mx-xxl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif !important; }

.text-justify {
  text-align: justify !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

@media (min-width: 1400px) {
  .text-xxl-left {
    text-align: left !important; }
  .text-xxl-right {
    text-align: right !important; }
  .text-xxl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-lighter {
  font-weight: lighter !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-weight-bolder {
  font-weight: bolder !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #fff !important; }

.text-primary {
  color: #00b5b8 !important; }

a.text-primary:hover, a.text-primary:focus {
  color: #006a6c !important; }

.text-secondary {
  color: #404e67 !important; }

a.text-secondary:hover, a.text-secondary:focus {
  color: #232a38 !important; }

.text-success {
  color: #16d39a !important; }

a.text-success:hover, a.text-success:focus {
  color: #0f8e67 !important; }

.text-info {
  color: #2dcee3 !important; }

a.text-info:hover, a.text-info:focus {
  color: #179bad !important; }

.text-warning {
  color: #ffa87d !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ff7531 !important; }

.text-danger {
  color: #ff7588 !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #ff2946 !important; }

.text-light {
  color: #babfc7 !important; }

a.text-light:hover, a.text-light:focus {
  color: #9098a5 !important; }

.text-dark {
  color: #1b2942 !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #05070c !important; }

.text-body {
  color: #404e67 !important; }

.text-muted {
  color: #404e67 !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.text-decoration-none {
  text-decoration: none !important; }

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important; }

.text-reset {
  color: inherit !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #626e82 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #98a4b8; }
  .table .thead-dark th {
    color: inherit;
    border-color: #98a4b8; } }

a:focus {
  outline: none; }

.font-small-1 {
  font-size: 0.7rem !important; }

.font-small-2 {
  font-size: 0.8rem !important; }

.font-small-3 {
  font-size: 0.9rem !important; }

.font-medium-1 {
  font-size: 1.1rem !important; }

.font-medium-2 {
  font-size: 1.2rem !important; }

.font-medium-3 {
  font-size: 1.3rem !important; }

.font-medium-4 {
  font-size: 1.4rem !important; }

.font-medium-5 {
  font-size: 1.5rem !important; }

.font-large-1 {
  font-size: 2rem !important; }

.font-large-2 {
  font-size: 3rem !important; }

.font-large-3 {
  font-size: 4rem !important; }

.font-large-4 {
  font-size: 5rem !important; }

.font-large-5 {
  font-size: 6rem !important; }

.text-bold-300 {
  font-weight: 300; }

.text-bold-400 {
  font-weight: 400; }

.text-bold-500 {
  font-weight: 500; }

.text-bold-600 {
  font-weight: 600; }

.text-bold-700 {
  font-weight: 700; }

.text-italic {
  font-style: italic; }

.text-highlight {
  padding: 4px 6px; }

ol li, ul li, dl li {
  line-height: 1.8; }

code {
  padding: .2rem .4rem;
  font-size: 90%;
  color: #e83e8c;
  background-color: #f5f7fa;
  border-radius: 0.25rem; }

pre {
  background-color: #f7f7f9; }
  pre code {
    background-color: transparent !important; }

.bd-example-row .row + .row {
  margin-top: 1rem; }

.bd-example-row .row > .col,
.bd-example-row .row > [class^="col-"] {
  padding-top: .75rem;
  padding-bottom: .75rem;
  background-color: rgba(86, 61, 124, 0.15);
  border: 1px solid rgba(86, 61, 124, 0.2); }

.bd-example-row .flex-items-top,
.bd-example-row .flex-items-middle,
.bd-example-row .flex-items-bottom {
  min-height: 6rem;
  background-color: rgba(255, 0, 0, 0.1); }

.bd-example-row-flex-cols .row {
  min-height: 10rem;
  background-color: rgba(255, 0, 0, 0.1); }

.bd-highlight {
  background-color: rgba(86, 61, 124, 0.15);
  border: 1px solid rgba(86, 61, 124, 0.15); }

.example-container {
  width: 800px;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto; }

.example-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.example-content-main {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }
  @media (min-width: 576px) {
    .example-content-main {
      flex: 0 0 50%;
      max-width: 50%; } }
  @media (min-width: 992px) {
    .example-content-main {
      flex: 0 0 66.66667%;
      max-width: 66.66667%; } }

.example-content-secondary {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }
  @media (min-width: 576px) {
    .example-content-secondary {
      flex: 0 0 50%;
      max-width: 50%; } }
  @media (min-width: 992px) {
    .example-content-secondary {
      flex: 0 0 33.33333%;
      max-width: 33.33333%; } }

.table-white-space th, .table-white-space td {
  white-space: nowrap; }

.table-borderless td, .table-borderless th {
  border: none; }

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #e3ebf3;
  border-top: 1px solid #e3ebf3; }

.table-bordered th, .table-bordered td {
  border: 1px solid #e3ebf3; }

.table th, .table td {
  border-bottom: 1px solid #e3ebf3; }

.table-bordered {
  border: 1px solid #e3ebf3; }

.table-inverse {
  color: #eceeef;
  background-color: #00A5A8; }

.table.table-column th, .table.table-column td {
  border: none;
  border-left: 1px solid #e3ebf3; }

.table.table-column th:first-child, .table.table-column td:first-child {
  border-left: none; }

.table th, .table td {
  padding: 0.75rem 2rem; }

.table.table-xl th, .table.table-xl td {
  padding: 1.25rem 2rem; }

.table.table-lg th, .table.table-lg td {
  padding: 0.9rem 2rem; }

.table.table-de th, .table.table-de td {
  padding: 0.75rem 2rem; }

.table.table-sm th, .table.table-sm td {
  padding: 0.6rem 2rem; }

.table.table-xs th, .table.table-xs td {
  padding: 0.4rem 2rem; }

/*
* Table sizing
*/
.table-borderless thead th {
  border-top: 1px solid #e3ebf3; }

.table-borderless > tbody > tr > td, .table-borderless > tbody > tr > th {
  border: 0; }

.table > thead > tr.border-solid > th {
  border-bottom-width: 2px; }

.table > thead > tr.border-double > th {
  border-bottom-width: 4px;
  border-bottom-style: double; }

.table > tbody > tr.border-dashed > td {
  border-top-style: dashed; }

.border-custom-color td {
  border-top: inherit;
  border-bottom: inherit; }

form {
  /* .form-body{
        overflow: hidden;
    } */ }
  form label {
    color: #2e405c; }
  form .form-group {
    margin-bottom: 1.5rem; }
  form .form-control {
    border: 1px solid #ccd6e6;
    color: #3f587e; }
    form .form-control::-webkit-input-placeholder {
      color: #b1c1d8; }
    form .form-control:-moz-placeholder {
      /* Firefox 18- */
      color: #b1c1d8; }
    form .form-control::-moz-placeholder {
      /* Firefox 19+ */
      color: #b1c1d8; }
    form .form-control:-ms-input-placeholder {
      color: #b1c1d8; }
  form .form-section {
    color: #98a4b8;
    line-height: 3rem;
    margin-bottom: 20px;
    border-bottom: 1px solid #98a4b8; }
    form .form-section i {
      font-size: 20px;
      margin-left: 5px;
      margin-right: 10px; }
  form .form-actions {
    border-top: 1px solid #d3dce9;
    padding: 20px 0;
    margin-top: 20px; }
    form .form-actions.filled {
      background-color: #F5F7FA; }
    form .form-actions.center {
      text-align: center; }
    form .form-actions.right {
      text-align: right; }
    form .form-actions.top {
      border-top: 0;
      border-bottom: 1px solid #d3dce9;
      margin-top: 0;
      margin-bottom: 20px; }
    @media (max-width: 767.98px) {
      form .form-actions .buttons-group {
        float: left !important;
        margin-bottom: 10px; } }
  @media (min-width: 576px) {
    form.form-horizontal .form-group .label-control {
      text-align: right; } }
  form.row-separator .form-group {
    margin: 0;
    border-bottom: 1px solid #ebeff5; }
    form.row-separator .form-group .label-control {
      padding-top: 1.5rem; }
    form.row-separator .form-group > div {
      padding: 1.2rem;
      padding-right: 0; }
    form.row-separator .form-group.last {
      border-bottom: 0; }
  form.form-bordered .form-group {
    margin: 0;
    border-bottom: 1px solid #ebeff5; }
    form.form-bordered .form-group .label-control {
      padding-top: 1.5rem; }
    form.form-bordered .form-group > div {
      padding: 1.2rem;
      padding-right: 0;
      border-left: 1px solid #ebeff5; }
    form.form-bordered .form-group.last {
      border-bottom: 0; }
  form.striped-rows .form-group {
    margin: 0; }
    form.striped-rows .form-group .label-control {
      padding-top: 1.5rem; }
    form.striped-rows .form-group > div {
      padding: 1.2rem;
      padding-right: 0; }
    form.striped-rows .form-group:nth-child(even) {
      background-color: #F5F7FA; }
  form.striped-labels .form-group {
    margin: 0; }
    form.striped-labels .form-group .label-control {
      padding-top: 1.5rem; }
    form.striped-labels .form-group > div {
      padding: 1.2rem;
      padding-right: 0;
      background-color: white; }
    form.striped-labels .form-group:nth-child(even) {
      background-color: #F5F7FA; }
  form .custom-control-indicator {
    width: 1.1rem;
    height: 1.075rem;
    line-height: 1.05rem;
    top: 0.2rem;
    left: 0; }
    form .custom-control-indicator + .custom-control-description {
      margin-left: 1rem; }

select.form-control {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
  -moz-appearance: none;
  -webkit-appearance: none; }

.custom-select {
  -moz-appearance: none;
  -webkit-appearance: none; }

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px); }

.input-group-addon {
  background-color: #ECEFF1;
  border-color: #BABFC7; }

.custom-control-label::before, .custom-control-label::after {
  width: 1.1rem;
  height: 1.1rem; }

.tagging-js-tags .form-control, .tagging-methods .form-control {
  height: auto; }

.btn.btn-square {
  border-radius: 0; }

.btn.btn-round {
  border-radius: 2rem; }

.btn:focus, .btn.focus, .btn:active, .btn.active {
  outline: none;
  box-shadow: none !important; }

.btn.btn-icon i {
  font-size: 1.1rem; }

.btn.btn-icon.btn-pure {
  background-color: transparent;
  border-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none; }
  .btn.btn-icon.btn-pure i {
    font-size: 1.25rem; }

.btn.btn-social {
  padding: 0.7rem 0.25rem 0.85rem 3.75rem; }

.btn.btn-outline-white:hover {
  color: #404e67 !important; }

.btn-min-width {
  min-width: 8.5rem; }

.color-box {
  width: 100%;
  height: 2.75rem;
  border-radius: 0.25rem; }

.btn-float {
  padding: 15px;
  white-space: normal;
  -webkit-box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15); }
  .btn-float.btn-link {
    padding: 10px; }
  .btn-float i {
    display: block;
    margin: 0;
    top: 0; }
  .btn-float.btn-float-lg i,
  .btn-float.btn-float-lg span {
    font-size: 2rem; }
  .btn-float.btn-float-lg i + span {
    font-size: 1.1rem; }
  .btn-float > i + span {
    display: block;
    padding-top: 10px;
    margin-bottom: -6px; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  cursor: pointer; }

.collapse-icon .card-header {
  position: relative; }

.collapse-icon [data-toggle="collapse"]:after {
  position: absolute;
  top: 48%;
  right: 20px;
  margin-top: -8px;
  font-family: 'feather';
  content: "\e897";
  transition: all 300ms linear 0s; }

.collapse-icon [data-toggle="collapse"]:before {
  position: absolute;
  top: 48%;
  right: 20px;
  margin-top: -8px;
  font-family: 'feather';
  content: "\e8b1";
  transition: all 300ms linear 0s; }

.collapse-icon.left a {
  padding-left: 28px; }

.collapse-icon.left [data-toggle="collapse"]:before, .collapse-icon.left [data-toggle="collapse"]:after {
  left: 20px;
  right: auto; }

.collapse-icon [aria-expanded="true"]:before {
  opacity: 0; }

.collapse-icon [aria-expanded="false"]:after {
  opacity: 0; }

.collapse-icon.accordion-icon-rotate [aria-expanded="true"]:before {
  transform: rotate(180deg); }

.collapse-icon.accordion-icon-rotate [aria-expanded="false"]:after {
  transform: rotate(-180deg); }

.header-navbar .navbar-container .mega-dropdown-menu .collapse-icon [data-toggle="collapse"]:after {
  margin-top: -14px; }

.header-navbar .navbar-container .mega-dropdown-menu .collapse-icon [data-toggle="collapse"]:before {
  margin-top: -14px; }

.dropdown .dropdown-menu {
  border: 1px solid #e6e6e6;
  border-radius: 0 0 0.25rem 0.25rem;
  transform-origin: top;
  animation-fill-mode: forwards;
  transform: scale(1, 0);
  transition: all 0.2s linear;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); }
  .dropdown .dropdown-menu .dropdown-header {
    padding: 10px 20px;
    margin-top: 10px;
    text-transform: uppercase;
    color: #626e82; }
  .dropdown .dropdown-menu .dropdown-item {
    padding: 10px 40px 10px 20px;
    width: auto;
    cursor: pointer; }
    .dropdown .dropdown-menu .dropdown-item:active {
      background-color: #f2f4f7 !important;
      color: #404e67; }

.dropdown i {
  margin-right: 0.5rem; }

.nav-item i {
  margin-right: 0.5rem; }

.show > .dropdown-menu {
  transform: scale(1, 1);
  opacity: 1;
  display: block; }

.dropdown-toggle::after {
  font-family: "FontAwesome";
  content: "\f107" !important;
  border: none !important;
  position: relative;
  top: 1px;
  right: 0px;
  padding: 0 2px 0 6px;
  margin: 0 0.3em 0 0;
  vertical-align: 0; }

.dropdown-toggle.nav-hide-arrow::after {
  display: none; }

.dropdown-toggle:focus {
  outline: 0; }

.navbar-horizontal .dropdown-submenu .dropdown-toggle::after {
  top: -9px !important;
  margin-top: 1.25rem;
  right: 10px; }

.dropdown-menu {
  box-shadow: none; }
  .dropdown-menu .dropdown-submenu {
    position: relative; }
    .dropdown-menu .dropdown-submenu:hover .dropdown-menu {
      display: block; }
    .dropdown-menu .dropdown-submenu > .dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px; }
      .dropdown-menu .dropdown-submenu > .dropdown-menu.open-left {
        left: auto;
        right: 100%; }
    .dropdown-menu .dropdown-submenu > a:after,
    .dropdown-menu .dropdown-submenu > button:after {
      font-family: "FontAwesome";
      content: "\f105" !important;
      right: 5px;
      font-size: 1.2rem;
      float: right;
      border: none;
      position: absolute; }
    .dropdown-menu .dropdown-submenu :hover > a:after,
    .dropdown-menu .dropdown-submenu :hover > button:after {
      border-left-color: #555; }
    .dropdown-menu .dropdown-submenu .pull-left {
      float: none; }
      .dropdown-menu .dropdown-submenu .pull-left > .dropdown-menu {
        left: -100%;
        margin-left: 10px; }

.dropdown-header {
  text-transform: uppercase; }
  .dropdown-header.highlight {
    color: #2b2d2f;
    text-decoration: none;
    background-color: #f5f5f5; }

.btn-secondary ~ .dropdown-menu .dropdown-item.active {
  background-color: #cccccc; }

.btn-primary ~ .dropdown-menu .dropdown-item.active {
  background-color: #00b5b8; }

.btn-success ~ .dropdown-menu .dropdown-item.active {
  background-color: #16d39a; }

.btn-danger ~ .dropdown-menu .dropdown-item.active {
  background-color: #ff7588; }

.btn-info ~ .dropdown-menu .dropdown-item.active {
  background-color: #2dcee3; }

.btn-warning ~ .dropdown-menu .dropdown-item.active {
  background-color: #ffa87d; }

.dropdown-menu.arrow {
  margin-top: 12px; }
  .dropdown-menu.arrow:after, .dropdown-menu.arrow:before {
    position: absolute;
    left: 10px;
    display: inline-block;
    width: 0;
    height: 0;
    content: "";
    border: 7px solid transparent;
    border-top-width: 0; }
  .dropdown-menu.arrow:before {
    top: -7px;
    border-bottom-color: #b3b3b3; }
  .dropdown-menu.arrow:after {
    top: -6px;
    border-bottom-color: #fff; }

.dropdown-menu .arrow-left {
  margin-left: 7px !important; }
  .dropdown-menu .arrow-left:after, .dropdown-menu .arrow-left:before {
    position: absolute;
    top: 10px;
    display: inline-block;
    width: 0;
    height: 0;
    content: "";
    border: 7px solid transparent;
    border-left-width: 0; }
  .dropdown-menu .arrow-left:before {
    left: -8px;
    border-right-color: #b3b3b3; }
  .dropdown-menu .arrow-left:after {
    left: -7px;
    border-right-color: #fff; }

.dropdown-menu .arrow-right {
  margin-right: 7px !important; }
  .dropdown-menu .arrow-right:after, .dropdown-menu .arrow-right:before {
    position: absolute;
    top: 10px;
    display: inline-block;
    width: 0;
    height: 0;
    content: "";
    border: 7px solid transparent;
    border-right-width: 0; }
  .dropdown-menu .arrow-right:before {
    right: -7px;
    border-left-color: #b3b3b3; }
  .dropdown-menu .arrow-right:after {
    right: -6px;
    border-left-color: #fff; }

.dropup .dropdown-toggle::after {
  content: "\f106" !important; }

.dropup .dropdown-menu {
  top: auto; }
  .dropup .dropdown-menu.arrow {
    margin-bottom: 12px; }
    .dropup .dropdown-menu.arrow:after, .dropup .dropdown-menu.arrow:before {
      top: auto;
      border-top-width: 7px;
      border-bottom-width: 0; }
    .dropup .dropdown-menu.arrow:before {
      bottom: -8px;
      border-top-color: #b3b3b3; }
    .dropup .dropdown-menu.arrow:after {
      bottom: -6px;
      border-top-color: #fff; }

.dropup .dropdown-submenu .dropdown-menu {
  bottom: auto;
  top: 0; }

.dropdown-menu-xl a,
.dropdown-menu-xl button {
  padding-top: 9px;
  padding-bottom: 9px;
  font-size: 1rem;
  line-height: 1.43; }

.dropdown-menu-lg a,
.dropdown-menu-lg button {
  padding-top: 6px;
  padding-bottom: 6px; }

.dropdown-menu-sm a,
.dropdown-menu-sm button {
  padding-top: 5px;
  padding-bottom: 5px;
  font-size: 0.86rem;
  line-height: 1.67; }

.dropdown-item.buttons-columnVisibility.active {
  color: #000; }

/* ===============================================================================================
    File Name: navbar.scss
    Description: Contain header navigation bar, vertical main navigation bar and
    horiznotal main navigation bar related SCSS.
    ----------------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
================================================================================================*/
.navbar-dark .hamburger-inner,
.navbar-dark .hamburger-inner::before,
.navbar-dark .hamburger-inner::after {
  background-color: #fff; }

.horizontal-layout .navbar-nav .mega-dropdown-menu {
  width: 100%; }

.header-navbar {
  padding: 0px;
  min-height: 4rem;
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
  transition: 300ms ease all;
  /* For sm screen*/ }
  .header-navbar .navbar-wrapper {
    width: 100%; }
  .header-navbar.navbar-border {
    border-bottom: 1px solid #e4e7ed; }
  .header-navbar.navbar-dark.navbar-border {
    border-bottom: 1px solid #8596b5; }
  .header-navbar.navbar-semi-dark.navbar-border {
    border-bottom: none; }
  .header-navbar.navbar-shadow {
    box-shadow: 2px 4px 20px -4px rgba(0, 0, 0, 0.1); }
  .header-navbar.navbar-without-dd-arrow .nav-link.dropdown-toggle::after {
    display: none; }
  .header-navbar.navbar-brand-center .navbar-header {
    width: 150px;
    position: absolute;
    left: 50%;
    top: 0;
    padding: 0;
    margin: 0;
    transform: translate(-50%, 0);
    z-index: 999; }
  .header-navbar.navbar-static-top {
    z-index: 1038; }
  .header-navbar .navbar-header {
    height: 100%;
    width: 240px;
    height: 4rem;
    float: left;
    position: relative;
    padding: 0rem 1rem;
    transition: 300ms ease all; }
    .header-navbar .navbar-header .navbar-brand {
      padding: 15px 0px; }
      .header-navbar .navbar-header .navbar-brand .brand-logo {
        vertical-align: sub; }
      .header-navbar .navbar-header .navbar-brand .brand-text {
        display: inline;
        padding-left: 10px;
        font-weight: 500;
        letter-spacing: 1px; }
  .header-navbar .navbar-container {
    padding: 0rem 18px;
    transition: 300ms ease all;
    background: inherit; }
    .header-navbar .navbar-container ul.nav li > a.nav-link {
      padding: 1.4rem 0.6rem; }
      .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
        margin-right: 0.5rem; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
      padding: 0.8rem 0.6rem; }
      .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
        display: inline-block;
        margin-bottom: 0.4rem;
        margin-left: 0.2rem; }
    .header-navbar .navbar-container ul.nav li a.menu-toggle {
      padding: 1.1rem 0.8rem 1rem 1rem; }
      .header-navbar .navbar-container ul.nav li a.menu-toggle i {
        font-size: 1.6rem; }
    .header-navbar .navbar-container ul.nav li a.nav-link-label {
      padding: 1.4rem 0rem 1rem 0.8rem; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link .avatar {
      margin-right: 0.5rem; }
      .header-navbar .navbar-container ul.nav li a.dropdown-user-link .avatar i {
        right: -10px; }
    .header-navbar .navbar-container ul.nav li a.nav-link-search,
    .header-navbar .navbar-container ul.nav li a.nav-link-expand {
      padding: 1.4rem 1rem 1.3rem 1rem; }
    .header-navbar .navbar-container ul.nav li div.input-group {
      padding: 0.7rem 1rem; }
    .header-navbar .navbar-container ul.nav li i.ficon {
      font-size: 1.2rem; }
    .header-navbar .navbar-container ul.nav li .media-list {
      max-height: 18.2rem; }
    .header-navbar .navbar-container ul.nav li .scrollable-container {
      position: relative; }
    .header-navbar .navbar-container .dropdown-menu-media {
      width: 24rem; }
      .header-navbar .navbar-container .dropdown-menu-media .media-list .media {
        padding: 1rem;
        border: none;
        border-bottom: 1px solid #E6E6E6; }
      .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-header {
        border-bottom: 1px solid #E6E6E6; }
      .header-navbar .navbar-container .dropdown-menu-media .dropdown-menu-footer a {
        padding: 0.3rem;
        border-top: 1px solid #E6E6E6; }
  .header-navbar.navbar-without-menu .navbar-container {
    margin-left: 0; }
  .header-navbar .nav-item + .nav-item {
    margin-left: 0rem; }
  @media (max-width: 767.98px) {
    .header-navbar .navbar-header {
      width: 100% !important;
      padding: 0.5rem 1rem;
      position: relative; }
      .header-navbar .navbar-header .menu-toggle {
        top: 2px;
        position: relative; }
      .header-navbar .navbar-header .open-navbar-container i {
        font-size: 1.8rem; }
      .header-navbar .navbar-header .navbar-brand {
        position: absolute;
        left: 50%;
        top: 0;
        transform: translate(-50%, 0); }
    .header-navbar.navbar-with-menu .navbar-container {
      width: 100%;
      display: table;
      background: #fff;
      padding: 0rem 1rem;
      margin: 0;
      height: auto; } }

/* Modern menu For md screen*/
@media (max-width: 991.98px) {
  [data-menu="vertical-menu-modern"] .header-navbar .navbar-header {
    width: 100% !important;
    padding: 0.5rem 1rem;
    position: relative; }
    [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .menu-toggle {
      top: 2px;
      position: relative; }
    [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .open-navbar-container i {
      font-size: 1.8rem; }
    [data-menu="vertical-menu-modern"] .header-navbar .navbar-header .navbar-brand {
      position: absolute;
      left: 50%;
      top: 0;
      transform: translate(-50%, 0); }
  [data-menu="vertical-menu-modern"] .header-navbar.navbar-with-menu .navbar-container {
    width: 100%;
    display: table;
    background: #fff;
    padding: 0rem 1rem;
    margin: 0;
    height: auto; }
  [data-menu="vertical-menu-modern"] .navbar-dark .navbar-header .navbar-nav .nav-link,
  [data-menu="vertical-menu-modern"] .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
    color: #fff; }
  [data-menu="vertical-menu-modern"] .navbar-dark .navbar-container .navbar-nav .nav-link,
  [data-menu="vertical-menu-modern"] .navbar-semi-dark .navbar-container .navbar-nav .nav-link {
    color: #404E67; }
  [data-menu="vertical-menu-modern"] .navbar-light .navbar-header .navbar-nav .nav-link {
    color: #404E67; } }

.navbar-light {
  background: #fff; }
  .navbar-light.navbar-horizontal {
    background: #fff; }
  .navbar-light .navbar-nav li {
    line-height: 1; }
  .navbar-light .navbar-nav .active.nav-link {
    background-color: rgba(0, 0, 0, 0.03); }
  .navbar-light .navbar-nav .disabled.nav-link {
    color: #404e67; }

.navbar-dark {
  background: #404E67; }
  .navbar-dark .navbar-brand {
    color: #fff !important; }
  .navbar-dark.navbar-horizontal {
    background: #404E67; }
  .navbar-dark .nav-search .form-control,
  .navbar-dark .nav-search .btn-secondary {
    color: #fff;
    background: #404E67; }
  .navbar-dark .navbar-nav li {
    line-height: 1; }
  .navbar-dark .navbar-nav .active.nav-link {
    background-color: rgba(255, 255, 255, 0.05); }
  .navbar-dark .navbar-nav .disabled.nav-link {
    color: #98a4b8; }

.navbar-semi-dark {
  background: #fff; }
  .navbar-semi-dark .navbar-header {
    background: #404E67; }
    .navbar-semi-dark .navbar-header .brand-text {
      color: #fff; }
  .navbar-semi-dark .navbar-nav li {
    line-height: 1; }
  .navbar-semi-dark .navbar-nav .nav-link {
    color: #404e67; }
  .navbar-semi-dark .navbar-nav .active.nav-link {
    background-color: rgba(0, 0, 0, 0.03); }
  .navbar-semi-dark .navbar-nav .disabled.nav-link {
    color: #404e67; }

.navbar-semi-light {
  background: #404e67; }
  .navbar-semi-light .navbar-header {
    background: #fff; }
    .navbar-semi-light .navbar-header .brand-text {
      color: #404E67; }
  .navbar-semi-light .navbar-nav li {
    line-height: 1; }
  .navbar-semi-light .navbar-nav .nav-link {
    color: #fff; }
  .navbar-semi-light .navbar-nav .active.nav-link {
    background-color: rgba(0, 0, 0, 0.03); }
  .navbar-semi-light .navbar-nav .disabled.nav-link {
    color: #404e67; }

.header-navbar .navbar-wrapper .navbar-container .badge-up {
  position: relative;
  top: -13px;
  left: -14px; }

.mega-dropdown {
  position: static !important; }
  .mega-dropdown.show .dropdown-menu {
    display: flex; }

.bg-mega {
  background: linear-gradient(to right, #00b5b8, #16d39a);
  border-radius: 0.5rem; }

.navigation-main .mega-dropdown-menu,
.navbar-nav .mega-dropdown-menu {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  width: calc(100% - 50px);
  padding: 0.5rem 0;
  /* fallback if needed */
  margin: 0px 25px;
  box-shadow: none;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  z-index: 9999; }
  .navigation-main .mega-dropdown-menu ul,
  .navbar-nav .mega-dropdown-menu ul {
    padding: 0;
    margin: 0; }
    .navigation-main .mega-dropdown-menu ul li,
    .navbar-nav .mega-dropdown-menu ul li {
      list-style: none; }
      .navigation-main .mega-dropdown-menu ul li a,
      .navbar-nav .mega-dropdown-menu ul li a {
        display: block;
        color: #1b2942; }
        .navigation-main .mega-dropdown-menu ul li a .children-in,
        .navbar-nav .mega-dropdown-menu ul li a .children-in {
          float: right; }
        .navigation-main .mega-dropdown-menu ul li a:hover,
        .navbar-nav .mega-dropdown-menu ul li a:hover {
          text-decoration: none;
          color: #00b5b8; }
        .navigation-main .mega-dropdown-menu ul li a:focus,
        .navbar-nav .mega-dropdown-menu ul li a:focus {
          text-decoration: none;
          color: #404e67; }
    .navigation-main .mega-dropdown-menu ul a.dropdown-item,
    .navbar-nav .mega-dropdown-menu ul a.dropdown-item {
      padding: 10px; }
  .navigation-main .mega-dropdown-menu p.accordion-text,
  .navbar-nav .mega-dropdown-menu p.accordion-text {
    line-height: 1.45; }
  .navigation-main .mega-dropdown-menu .dropdown-menu-header,
  .navbar-nav .mega-dropdown-menu .dropdown-menu-header {
    padding: 0.5rem 0;
    border-bottom: 1px solid #E6E6E6; }

.horizontal-top-icon-menu .mega-dropdown-menu {
  margin: 0px 25px !important; }

@media (min-width: 576px) {
  .container .mega-dropdown-menu {
    max-width: 540px;
    margin: 0 calc((100% - 540px)/2); } }

@media (min-width: 768px) {
  .container .mega-dropdown-menu {
    max-width: 720px;
    margin: 0 calc((100% - 720px)/2); } }

@media (min-width: 992px) {
  .container .mega-dropdown-menu {
    max-width: 960px;
    margin: 0 calc((100% - 960px)/2); } }

@media (min-width: 1200px) {
  .container .mega-dropdown-menu {
    max-width: 1140px;
    margin: 0 calc((100% - 1140px)/2); } }

@media (min-width: 1400px) {
  .container .mega-dropdown-menu {
    max-width: 1340px;
    margin: 0 calc((100% - 1340px)/2); } }

@-moz-document url-prefix() {
  ul li a .children-in {
    position: relative;
    right: 3px;
    top: -14px; } }

.menu-list {
  list-style: none;
  padding: 0;
  overflow: hidden; }

.menu-panel {
  padding: 0; }

.sliding-menu {
  overflow: hidden;
  position: relative; }
  .sliding-menu ul {
    float: left;
    margin: 0;
    padding: 0; }
    .sliding-menu ul li {
      list-style: none;
      margin: 0; }

.navbar-menu-icon {
  width: 24px;
  margin: 16px 2px !important;
  position: relative;
  margin: 0px auto;
  transform: rotate(0deg);
  transition: 0.5s ease-in-out;
  cursor: pointer; }

.navbar-menu-icon span {
  display: block;
  position: absolute;
  height: 2px;
  width: 100%;
  background: #404e67;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  transform: rotate(0deg);
  transition: 0.25s ease-in-out; }

.navbar-menu-icon span:nth-child(1) {
  top: 0px; }

.navbar-menu-icon span:nth-child(2) {
  top: 10px; }

.navbar-menu-icon span:nth-child(3) {
  top: 20px; }

.navbar-menu-icon.show span:nth-child(1) {
  top: 10px;
  transform: rotate(135deg); }

.navbar-menu-icon.show span:nth-child(2) {
  opacity: 0;
  left: -60px; }

.navbar-menu-icon.show span:nth-child(3) {
  top: 10px;
  transform: rotate(-135deg); }

@media (max-width: 767.98px) {
  .header-navbar .navbar-nav .show {
    position: static; }
  .header-navbar .navbar-nav .open-navbar-container {
    padding-top: 0.625rem; }
  .header-navbar .navbar-container .show .dropdown-menu {
    right: 0;
    left: 0 !important;
    float: none;
    width: auto;
    margin-top: 0;
    max-height: 400px;
    overflow-x: hidden;
    overflow-y: scroll; }
  .header-navbar .navbar-container ul.nav li.nav-item i {
    margin-right: 0.2rem; }
  .header-navbar .navbar-container ul.nav li > a.nav-link {
    padding: 1.2rem 0.4rem; }
    .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
      margin-right: 0.2rem; }
  .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
    padding: 0.9rem 0.6rem; }
  .header-navbar .navbar-container ul.nav li a.nav-link-label {
    padding: 1.4rem 0rem 1rem 0.8rem; }
  .header-navbar .navbar-container ul.nav li a.nav-link-search,
  .header-navbar .navbar-container ul.nav li a.nav-link-expand {
    padding: 1.4rem 1rem 1rem 1rem; }
  .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
    margin-right: 0;
    margin-left: -2px; }
  .navbar-dark .hamburger-inner,
  .navbar-dark .hamburger-inner::before,
  .navbar-dark .hamburger-inner::after,
  .navbar-semi-dark .hamburger-inner,
  .navbar-semi-dark .hamburger-inner::before,
  .navbar-semi-dark .hamburger-inner::after {
    background-color: #fff; }
  .navbar-dark .navbar-header .navbar-nav .nav-link,
  .navbar-semi-dark .navbar-header .navbar-nav .nav-link {
    color: #fff; }
  .navbar-dark .navbar-container .navbar-nav .nav-link,
  .navbar-semi-dark .navbar-container .navbar-nav .nav-link {
    color: #404e67; }
  .navbar-light .navbar-header .navbar-nav .nav-link,
  .navbar-semi-light .navbar-header .navbar-nav .nav-link {
    color: #404E67; }
  .navbar-light .navbar-container .navbar-nav .nav-link,
  .navbar-semi-light .navbar-container .navbar-nav .nav-link {
    color: #404e67; } }

.headroom {
  will-change: transform;
  transition: transform 200ms linear; }

.headroom--pinned-top {
  transform: translateY(0%); }

.headroom--unpinned-top {
  transform: translateY(-100%); }

.headroom--pinned-bottom {
  transform: translateY(0%); }

.headroom--unpinned-bottom {
  transform: translateY(100%); }

@media (max-width: 1199.98px) {
  .header-navbar .navbar-container ul.nav li > a.nav-link {
    padding: 1.3rem 0.4rem 1.1rem 0.4rem; }
    .header-navbar .navbar-container ul.nav li > a.nav-link i.flag-icon {
      margin-right: 0.2rem; }
  .header-navbar .navbar-container ul.nav li a.dropdown-user-link {
    padding: 0.85rem 0.6rem; }
    .header-navbar .navbar-container ul.nav li a.dropdown-user-link .user-name {
      display: none; }
  .header-navbar .navbar-container ul.nav li a.nav-link-label {
    padding: 1.2rem 0rem 1rem 0.8rem; }
  .header-navbar .navbar-container ul.nav li a.nav-link-search,
  .header-navbar .navbar-container ul.nav li a.nav-link-expand {
    padding: 1.5rem 1rem 1rem 1rem; }
  .header-navbar .navbar-container ul.nav li .selected-language {
    display: none; }
  .header-navbar .navbar-container ul.nav li .dropdown-toggle::after {
    margin-right: 0;
    margin-left: -2px; } }

@media (max-width: 767px) {
  #navbar-mobile.navbar-collapse .navbar-nav {
    margin: 0;
    flex-flow: row wrap; }
    #navbar-mobile.navbar-collapse .navbar-nav .dropdown-menu {
      position: absolute; }
    #navbar-mobile.navbar-collapse .navbar-nav .nav-item {
      float: left; } }

@media (max-width: 991.98px) {
  #navbar-mobile.navbar-collapse .navbar-nav {
    margin: 0;
    flex-flow: row wrap; }
    #navbar-mobile.navbar-collapse .navbar-nav .dropdown-menu {
      position: absolute; }
    #navbar-mobile.navbar-collapse .navbar-nav .nav-item {
      float: left; } }

/* ----------- iPhone 5, 5S  iPhone 6----------- */
/* Landscape */
@media only screen and (min-device-width: 26.78em) and (max-device-width: 47.64em) and (-webkit-min-device-pixel-ratio: 2) and (orientation: landscape) {
  .header-navbar .navbar-container .show .dropdown-menu {
    max-height: 180px; } }

/* ----------- iPhone 6+ ----------- */
/* Landscape */
@media only screen and (min-device-width: 29.57em) and (max-device-width: 52.57em) and (-webkit-min-device-pixel-ratio: 3) and (orientation: landscape) {
  .header-navbar .navbar-container .show .dropdown-menu {
    max-height: 280px; } }

.card-group, .card-deck {
  margin-bottom: 0.75rem; }

.card {
  margin-bottom: 1.875rem;
  border: none;
  border-radius: 0;
  box-shadow: 0 10px 40px 0 rgba(62, 57, 107, 0.07), 0 2px 9px 0 rgba(62, 57, 107, 0.06); }
  .card .card {
    box-shadow: none !important; }
  .card .card-title {
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 0.05rem;
    font-size: 1.12rem; }
  .card .card-bordered {
    border: 1px solid rgba(0, 0, 0, 0.06); }
  .card.card-fullscreen {
    display: block;
    z-index: 9999;
    position: fixed;
    width: 100% !important;
    height: 100% !important;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    overflow: auto; }
  .card .card-body[class*='border-bottom-'] {
    border-bottom-width: 2px !important; }
  .card .card-img-overlay.bg-overlay {
    background: rgba(0, 0, 0, 0.45); }
  .card .card-img-overlay .text-muted {
    color: #1b2942 !important; }
  .card.card-minimal {
    border: none;
    box-shadow: none; }
  .card .card-collapse-border {
    border-bottom: 1px solid #98a4b8; }
  .card .knob-center-icon {
    font-family: Simple-Line-Icons !important; }

.card-moved .card, .card-moved .card-header {
  background-color: #ffa87d;
  color: #fff; }

.handle, .titleArea {
  cursor: move; }

.card-header {
  border-bottom: none; }
  .card-header .card-title {
    margin-bottom: 0; }
  .card-header .heading-elements,
  .card-header .heading-elements-toggle {
    background-color: inherit;
    position: absolute;
    top: 20px;
    right: 21px; }
    .card-header .heading-elements.heading-top-elements .page-item,
    .card-header .heading-elements-toggle.heading-top-elements .page-item {
      display: inline-block; }
    .card-header .heading-elements a,
    .card-header .heading-elements-toggle a {
      padding: 0 8px; }
      .card-header .heading-elements a.btn,
      .card-header .heading-elements-toggle a.btn {
        padding-top: 6px;
        padding-bottom: 6px; }

.card-footer {
  border-top: 1px solid #EEEEEE; }

.text-white .card-text {
  color: white; }

.text-white .card-img-overlay .text-muted {
  color: #FFF !important; }

.text-white code {
  background-color: white; }

.text-white .heading-elements i {
  color: #FFF; }

.card-head-inverse {
  color: #FFF; }
  .card-head-inverse .heading-elements i {
    color: #FFF; }

.card-transparent {
  background-color: transparent; }

@media (max-width: 991.98px) {
  .heading-elements {
    text-align: center; }
    .heading-elements .list-inline {
      display: none; }
    .heading-elements.visible {
      display: block;
      margin-top: 0;
      top: 100%;
      top: 50px;
      height: auto;
      left: 0px;
      padding: 10px;
      border: 1px solid #eee;
      z-index: 997;
      position: absolute;
      width: 100%; }
      .heading-elements.visible .list-inline {
        display: block; } }

@media (min-width: 992px) {
  .heading-elements-toggle {
    display: none; } }

.accordion .card-header, .default-collapse .card-header {
  cursor: pointer; }

.breadcrumb {
  font-size: 0.9rem;
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
  text-transform: uppercase;
  background-color: transparent;
  padding: 0 0 0.75rem 0rem; }
  .breadcrumb > li + li::before {
    padding-right: .6rem;
    padding-left: .6rem; }

/* Custom scss for page headers style */
.breadcrumbs-right .breadcrumb {
  float: right; }

.breadcrumbs-top .breadcrumb {
  margin: 0;
  padding: 0; }

.badge {
  color: #fff;
  font-weight: 400;
  background-color: #00b5b8; }
  .badge[class*='badge-'] [class*='icon-'] {
    line-height: 1; }
    .badge[class*='badge-'] [class*='icon-'] ~ span {
      position: relative;
      bottom: 2px;
      padding: 0 5px; }
  .badge[class*='badge-'] span {
    position: relative;
    bottom: 2px;
    padding: 0 5px; }
  .badge[class*='badge-'] a {
    color: #fff; }
  .badge[class*='badge-'] .dropdown-toggle::after, .badge[class*='badge-'].dropdown-toggle::after {
    position: relative;
    font-size: 1rem; }
  .badge[class*='badge-'] .dropdown-menu a {
    color: #555; }
  .badge.badge-square {
    border-radius: 0; }
  .badge.badge.float-right {
    margin-left: 0.5rem;
    margin-top: 0.15rem; }

.badge-xl {
  font-size: 1.8rem; }

.badge-lg {
  font-size: 1.2rem; }

.badge-md {
  font-size: 1rem; }

.badge-sm {
  font-size: 0.8rem; }

.badge-secondary {
  background-color: #404e67; }
  .badge-secondary.badge-glow {
    box-shadow: 0px 0px 10px #404e67; }
  .badge-secondary[href]:hover, .badge-secondary[href]:focus {
    background-color: #2c3648; }

.badge-primary {
  background-color: #00b5b8; }
  .badge-primary.badge-glow {
    box-shadow: 0px 0px 10px #00b5b8; }
  .badge-primary[href]:hover, .badge-primary[href]:focus {
    background-color: #008385; }

.badge-success {
  background-color: #16d39a; }
  .badge-success.badge-glow {
    box-shadow: 0px 0px 10px #16d39a; }
  .badge-success[href]:hover, .badge-success[href]:focus {
    background-color: #11a578; }

.badge-info {
  background-color: #2dcee3; }
  .badge-info.badge-glow {
    box-shadow: 0px 0px 10px #2dcee3; }
  .badge-info[href]:hover, .badge-info[href]:focus {
    background-color: #1ab0c3; }

.badge-warning {
  background-color: #ffa87d; }
  .badge-warning.badge-glow {
    box-shadow: 0px 0px 10px #ffa87d; }
  .badge-warning[href]:hover, .badge-warning[href]:focus {
    background-color: #ff864a; }

.badge-danger {
  background-color: #ff7588; }
  .badge-danger.badge-glow {
    box-shadow: 0px 0px 10px #ff7588; }
  .badge-danger[href]:hover, .badge-danger[href]:focus {
    background-color: #ff425c; }

.badge-up {
  position: relative;
  top: -13px;
  right: 14px; }

.badge-icon i {
  font-size: 100%;
  margin-right: 5px; }

.form-control + .block-tag {
  display: block; }

.block-tag {
  margin-top: 0.5rem; }

.block-area {
  padding: 0.24rem 0.3rem; }

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
  color: #905;
  font-size: 100%;
  font-weight: 400;
  padding: 0; }

.nav {
  border-radius: 0.25rem; }
  .nav.wrap-border {
    border: 1px solid #ddd; }
    .nav.wrap-border li.nav-header {
      margin: 0 1.5rem; }
    .nav.wrap-border li.nav-item, .nav.wrap-border div {
      padding: 2px 10px; }
  .nav.no-hover-bg .nav-item:hover {
    background-color: transparent; }
  .nav .dropdown .dropdown-item.active {
    background-color: transparent;
    color: #55595c; }
    .nav .dropdown .dropdown-item.active:focus {
      background-color: transparent;
      color: #55595c; }
  .nav.square-border {
    border-radius: 0; }
    .nav.square-border .nav-item .nav-link.active {
      border-radius: 0; }
  .nav .nav-item .nav-link {
    display: inline-flex; }
  .nav .nav-item i {
    align-self: center; }
  .nav .dropdown-divider {
    margin: 0.5rem 0;
    border-top: 1px solid #e0e2e8; }
  .nav .modern-nav-toggle {
    padding: 20px 0px; }
  .nav.nav-pills .nav-item .nav-link i.float-right:before {
    position: relative;
    top: 7px;
    left: 7px; }
  .nav.nav-pills .nav-item .nav-link .badge.float-right {
    position: relative;
    top: 1px;
    left: 3px; }
  .nav.nav-pills .nav-item .nav-link.dropdown-toggle::after {
    top: -1px; }
  .nav.nav-pills.nav-justified {
    width: 100%; }
    .nav.nav-pills.nav-justified .nav-item {
      float: none; }
    .nav.nav-pills.nav-justified .nav-link {
      text-align: center;
      margin-bottom: 5px; }
    .nav.nav-pills.nav-justified > .dropdown .dropdown-menu {
      top: auto;
      left: auto; }
    @media (min-width: 576px) {
      .nav.nav-pills.nav-justified .nav-item {
        display: table;
        width: 1%; }
      .nav.nav-pills.nav-justified .nav-link {
        margin-bottom: 0; } }
    .nav.nav-pills.nav-justified .nav-link {
      margin-right: 0;
      border-radius: 0.25rem; }
    @media (min-width: 576px) {
      .nav.nav-pills.nav-justified .nav-link.active,
      .nav.nav-pills.nav-justified .nav-link.active:hover,
      .nav.nav-pills.nav-justified .nav-link.active:focus {
        border-bottom-color: transparent; } }
    .nav.nav-pills.nav-justified .nav-link {
      display: block; }
      .nav.nav-pills.nav-justified .nav-link.active {
        border: none; }
        .nav.nav-pills.nav-justified .nav-link.active:hover, .nav.nav-pills.nav-justified .nav-link.active:focus {
          border: none; }
  .nav.nav-pills.nav-pill-bordered .nav-item {
    border: 1px solid #d3d3d3;
    border-radius: 0.25rem; }
  .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link {
    border: 1px solid #d3d3d3;
    border-radius: 0.25rem;
    background-color: #ffffff;
    color: #55595c; }
    .nav.nav-pills.nav-pill-with-active-bordered .nav-item a.nav-link.active {
      border: 1px solid #00b5b8;
      color: #00b5b8; }
  .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link {
    color: #55595c; }
    .nav.nav-pills.nav-active-bordered-pill .nav-item a.nav-link.active {
      border: 1px solid #00b5b8;
      border-radius: 0.25rem;
      color: #00b5b8;
      background-color: #ffffff; }
  .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item ~ .nav-item a.nav-link {
    border-left: 1px solid #d3d3d3;
    border-top: 0; }
  .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:first-child a.nav-link {
    border-radius: 0.25rem 0.25rem 0 0; }
  .nav.nav-pills.nav-pill-toolbar.nav-stacked .nav-item:last-child a.nav-link {
    border-radius: 0 0 0.25rem 0.25rem; }
  .nav.nav-pills.nav-pill-toolbar .nav-item {
    margin-top: 0;
    margin-left: 0; }
    .nav.nav-pills.nav-pill-toolbar .nav-item a.nav-link {
      border: 1px solid #d3d3d3;
      border-radius: 0; }
  .nav.nav-tabs .nav-item .nav-link {
    padding: 0.5rem 0.7rem;
    display: inline-flex; }
    .nav.nav-tabs .nav-item .nav-link:hover:not(.active) {
      border-color: transparent; }
    .nav.nav-tabs .nav-item .nav-link.active {
      background-color: #fff;
      border-radius: 0.25rem 0.25rem 0 0; }
    .nav.nav-tabs .nav-item .nav-link i.float-right {
      margin-left: 0.5rem; }
    .nav.nav-tabs .nav-item .nav-link.dropdown-toggle::after {
      top: -1px; }
  .nav.nav-tabs .nav-item:hover {
    color: #333; }
  .nav.nav-tabs.wrap-border {
    border: 1px solid #ddd; }
  .nav.nav-tabs.no-hover-bg .nav-item:hover {
    background-color: transparent; }
  .nav.nav-tabs .dropdown .dropdown-item.active {
    background-color: transparent;
    color: #55595c; }
    .nav.nav-tabs .dropdown .dropdown-item.active:focus {
      background-color: transparent;
      color: #55595c; }
  .nav.nav-tabs.square-border {
    border-radius: 0; }
    .nav.nav-tabs.square-border .nav-item .nav-link.active {
      border-radius: 0; }
  .nav.nav-tabs.nav-justified {
    width: 100%; }
    .nav.nav-tabs.nav-justified .nav-item {
      float: none; }
    .nav.nav-tabs.nav-justified .nav-link {
      text-align: center;
      margin-bottom: 5px; }
    .nav.nav-tabs.nav-justified > .dropdown .dropdown-menu {
      top: auto;
      left: auto; }
    @media (min-width: 576px) {
      .nav.nav-tabs.nav-justified .nav-item {
        display: table;
        width: 1%; }
      .nav.nav-tabs.nav-justified .nav-link {
        margin-bottom: 0; } }
    .nav.nav-tabs.nav-justified .nav-link {
      margin-right: 0;
      border-radius: 0.25rem; }
    @media (min-width: 576px) {
      .nav.nav-tabs.nav-justified .nav-link.active,
      .nav.nav-tabs.nav-justified .nav-link.active:hover,
      .nav.nav-tabs.nav-justified .nav-link.active:focus {
        border-bottom-color: transparent; } }
    .nav.nav-tabs.nav-justified .nav-item a.nav-link {
      display: block; }
      .nav.nav-tabs.nav-justified .nav-item a.nav-link .active {
        background-color: #fff; }
  .nav.nav-tabs.nav-top-border .nav-item a {
    color: #16d39a; }
    .nav.nav-tabs.nav-top-border .nav-item a.nav-link.active {
      border-top: 3px solid #16d39a;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      color: #555; }
    .nav.nav-tabs.nav-top-border .nav-item a:hover {
      color: #084835; }
      .nav.nav-tabs.nav-top-border .nav-item a:hover:not(.active) {
        border-color: transparent; }
  .nav.nav-tabs.nav-topline {
    border-bottom: none; }
    .nav.nav-tabs.nav-topline .nav-item:hover {
      background-color: transparent; }
    .nav.nav-tabs.nav-topline .nav-item:not(:last-child) {
      border-right: none; }
    .nav.nav-tabs.nav-topline .nav-item a {
      border: 1px solid rgba(40, 44, 42, 0.1);
      border-bottom: none; }
      .nav.nav-tabs.nav-topline .nav-item a.nav-link {
        padding: 0.8rem 0.5rem;
        background: rgba(40, 44, 42, 0.05);
        color: #74777b;
        line-height: 1;
        -webkit-transition: color 0.2s;
        transition: color 0.2s; }
        .nav.nav-tabs.nav-topline .nav-item a.nav-link.active {
          background: none;
          box-shadow: inset 0 3px 0 #ff7588;
          color: #ff7588;
          border-radius: 0;
          border-top-color: #ff7588;
          border-bottom: none; }
        .nav.nav-tabs.nav-topline .nav-item a.nav-link:hover, .nav.nav-tabs.nav-topline .nav-item a.nav-link:focus {
          color: #ff7588; }
        .nav.nav-tabs.nav-topline .nav-item a.nav-link.dropdown-toggle::after {
          top: -1px; }
  .nav.nav-tabs.nav-underline {
    background: #fff;
    position: relative;
    border-bottom: 1px solid #2dcee3; }
    .nav.nav-tabs.nav-underline .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
      margin-left: 0; }
      .nav.nav-tabs.nav-underline .nav-item.open a .nav-link {
        background-color: transparent; }
        .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:focus, .nav.nav-tabs.nav-underline .nav-item.open a .nav-link:hover {
          background-color: transparent;
          color: #2dcee3; }
      .nav.nav-tabs.nav-underline .nav-item a.nav-link {
        position: relative;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 2.5;
        padding: 0.5rem 1rem;
        -webkit-transition: color 0.2s;
        transition: color 0.2s;
        color: #2dcee3;
        border: none; }
        .nav.nav-tabs.nav-underline .nav-item a.nav-link.dropdown-toggle::after {
          margin-top: -1rem; }
        .nav.nav-tabs.nav-underline .nav-item a.nav-link.active {
          border: none;
          background-color: transparent; }
          .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:focus, .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:hover {
            color: #55595c;
            background-color: transparent; }
          .nav.nav-tabs.nav-underline .nav-item a.nav-link.active:before {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0); }
        .nav.nav-tabs.nav-underline .nav-item a.nav-link:hover, .nav.nav-tabs.nav-underline .nav-item a.nav-link:focus {
          color: #2dcee3; }
        .nav.nav-tabs.nav-underline .nav-item a.nav-link:before {
          position: absolute;
          bottom: -1px;
          left: 0;
          width: 100%;
          height: 4px;
          background: #2dcee3;
          content: '';
          -webkit-transition: -webkit-transform 0.3s;
          transition: transform 0.3s;
          -webkit-transform: translate3d(0, 150%, 0);
          transform: translate3d(0, 150%, 0); }
  .nav.nav-tabs.nav-linetriangle {
    border-bottom-color: #ffa87d; }
    .nav.nav-tabs.nav-linetriangle .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1; }
      .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link {
        position: relative;
        display: block;
        overflow: visible;
        text-overflow: ellipsis;
        white-space: nowrap;
        line-height: 2.5;
        border: none;
        color: #55595c; }
        .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active {
          border-bottom: 1px solid #ffa87d;
          border-bottom-color: #ffa87d !important;
          color: #ffa87d; }
          .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after, .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
            position: absolute;
            top: 100%;
            left: 50%;
            width: 0;
            height: 0;
            border: solid transparent;
            content: '';
            pointer-events: none; }
          .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:before {
            margin-left: -11px;
            border-width: 12px;
            border-top-color: #ffa87d; }
          .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:after {
            margin-left: -10px;
            border-width: 10px;
            border-top-color: #fff; }
          .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.active:focus {
            color: #ffa87d; }
        .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle:after {
          margin-top: -1rem; }
        .nav.nav-tabs.nav-linetriangle .nav-item a.nav-link.dropdown-toggle.active:after {
          margin-top: 0; }
    .nav.nav-tabs.nav-linetriangle.nav-justified {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      border-bottom-color: #ffa87d; }
      .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item a.nav-link.active {
        top: 0px; }
  .nav.nav-tabs.nav-iconfall {
    overflow: visible;
    border-bottom: none; }
    .nav.nav-tabs.nav-iconfall .nav-item {
      position: relative;
      z-index: 1;
      display: block;
      text-align: center;
      -webkit-flex: 1;
      -moz-flex: 1;
      -ms-flex: 1;
      flex: 1;
      margin: 0.5rem 0.7rem 0; }
      .nav.nav-tabs.nav-iconfall .nav-item:hover, .nav.nav-tabs.nav-iconfall .nav-item:focus {
        background-color: transparent; }
      .nav.nav-tabs.nav-iconfall .nav-item a.nav-link {
        display: inline-block;
        padding: 1em 0 2em;
        color: #74777b;
        position: relative;
        line-height: 2.5;
        width: 100%;
        border: none;
        -webkit-transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        transition: color 0.3s cubic-bezier(0.7, 0, 0.3, 1); }
      .nav.nav-tabs.nav-iconfall .nav-item a:hover, .nav.nav-tabs.nav-iconfall .nav-item a:focus {
        color: #2CC185;
        border: none; }
      .nav.nav-tabs.nav-iconfall .nav-item a.active {
        color: #2CC185;
        border: none;
        background-color: transparent; }
        .nav.nav-tabs.nav-iconfall .nav-item a.active i:after {
          opacity: 1;
          -webkit-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1); }
        .nav.nav-tabs.nav-iconfall .nav-item a.active i:before {
          opacity: 1;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0); }
      .nav.nav-tabs.nav-iconfall .nav-item a i {
        display: block;
        margin-right: 0; }
        .nav.nav-tabs.nav-iconfall .nav-item a i:after {
          position: absolute;
          bottom: 1em;
          left: 50%;
          margin-left: -20px;
          width: 40px;
          height: 4px;
          background: #2CC185;
          content: '';
          opacity: 0;
          -webkit-transition: -webkit-transform 0.2s ease-in;
          transition: transform 0.2s ease-in;
          -webkit-transform: scale3d(0, 1, 1);
          transform: scale3d(0, 1, 1); }
        .nav.nav-tabs.nav-iconfall .nav-item a i:before {
          display: block;
          margin: 0 0 0.35em;
          opacity: 0;
          -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
          transition: transform 0.2s, opacity 0.2s;
          -webkit-transform: translate3d(0, -100px, 0);
          transform: translate3d(0, -100px, 0);
          pointer-events: none; }
      .nav.nav-tabs.nav-iconfall .nav-item a.dropdown-toggle:after {
        margin-top: -1rem; }
  .nav .nav-item .nav-link {
    display: block; }
  .nav .dropdown-divider {
    margin: 0.5rem 0; }

@media (min-width: 576px) {
  .nav.nav-tabs.nav-linetriangle.nav-justified .nav-item,
  .nav.nav-tabs.nav-iconfall.nav-justified .nav-item,
  .nav.nav-tabs.nav-underline.nav-justified .nav-item {
    display: table-cell !important; } }

.nav-vertical {
  overflow: hidden; }
  .nav-vertical .nav-left.nav-tabs {
    float: left;
    border-bottom: 0;
    border-radius: 0;
    display: table; }
    .nav-vertical .nav-left.nav-tabs li.nav-item {
      float: none;
      margin: 0;
      margin-right: -1px; }
      .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link {
        min-width: 6.5rem;
        border-right: 1px solid #ddd; }
        .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link.active {
          border: 1px solid #ddd;
          border-right: 0;
          border-radius: 0.25rem 0 0 0.25rem; }
        .nav-vertical .nav-left.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
          border-color: transparent;
          border-right: 1px solid #ddd; }
    .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link {
      color: #ff7588; }
      .nav-vertical .nav-left.nav-tabs.nav-border-left li.nav-item a.nav-link.active {
        border-left: 3px solid #ff7588;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        color: #555; }
  .nav-vertical .nav-left ~ .tab-content {
    margin-left: 45px; }
    .nav-vertical .nav-left ~ .tab-content .tab-pane {
      display: none;
      background-color: #fff;
      padding: 0 0 0.6rem 1rem;
      overflow-y: auto; }
      .nav-vertical .nav-left ~ .tab-content .tab-pane.active {
        display: block; }
  .nav-vertical .nav-right.nav-tabs {
    float: right;
    border-bottom: 0;
    border-radius: 0;
    display: table; }
    .nav-vertical .nav-right.nav-tabs li.nav-item {
      float: none;
      margin: 0;
      margin-left: -1px; }
      .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link {
        min-width: 6.5rem;
        border-left: 1px solid #ddd; }
        .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link.active {
          border: 1px solid #ddd;
          border-left: 0;
          border-radius: 0 0.25rem 0.25rem 0; }
        .nav-vertical .nav-right.nav-tabs li.nav-item a.nav-link:hover:not(.active) {
          border-color: transparent;
          border-left: 1px solid #ddd; }
    .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link {
      color: #ff7588; }
      .nav-vertical .nav-right.nav-tabs.nav-border-right li.nav-item a.nav-link.active {
        border-right: 3px solid #ff7588;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        color: #555; }
  .nav-vertical .nav-right ~ .tab-content .tab-pane {
    display: none;
    background-color: #fff;
    padding: 0 0 0.6rem 1rem;
    overflow-y: auto; }
    .nav-vertical .nav-right ~ .tab-content .tab-pane.active {
      display: block; }

.nav.nav-tabs.nav-only-icon .nav-item .nav-link {
  font-size: 1.25rem; }
  .nav.nav-tabs.nav-only-icon .nav-item .nav-link i {
    margin-left: 0.5rem; }

.nav.nav-tabs .nav-item.show .nav-link,
.nav.nav-tabs .nav-item.show .nav-link:focus {
  background-color: transparent; }

.alert {
  position: relative; }
  .alert .alert-link:hover {
    text-decoration: underline; }
  .alert.alert-icon-left {
    border-left-width: 4rem; }
  .alert.alert-icon-right {
    border-right-width: 4rem; }
  .alert.alert-icon-left[class*=bg-] {
    border-left-color: rgba(0, 0, 0, 0.15) !important; }
  .alert.alert-icon-right[class*=bg-] {
    border-right-color: rgba(0, 0, 0, 0.15) !important; }
  .alert[class*=alert-icon-]:after {
    content: '\f006';
    font-family: FontAwesome;
    color: #fff;
    width: 4rem;
    left: -4rem;
    text-align: center;
    position: absolute;
    top: 50%;
    margin-top: -8px;
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale; }
  .alert .close {
    font-size: 2rem;
    line-height: 1rem; }
  .alert[class*=bg-] {
    color: #fff; }
    .alert[class*=bg-] .alert-link {
      color: #fff; }
    .alert[class*=bg-] .close {
      color: #fff;
      opacity: 1;
      text-shadow: none; }
  .alert[class*=alert-icon-].alert-primary:after, .alert[class*=alert-icon-][class*=alert-primary]:after, .alert[class*=alert-icon-][class*=bg-primary]:after {
    content: '\f08a'; }
  .alert[class*=alert-icon-].alert-danger:after, .alert[class*=alert-icon-][class*=alert-danger]:after, .alert[class*=alert-icon-][class*=bg-danger]:after {
    content: '\f088'; }
  .alert[class*=alert-icon-].alert-success:after, .alert[class*=alert-icon-][class*=alert-success]:after, .alert[class*=alert-icon-][class*=bg-success]:after {
    content: '\f087'; }
  .alert[class*=alert-icon-].alert-warning:after, .alert[class*=alert-icon-][class*=alert-warning]:after, .alert[class*=alert-icon-][class*=bg-warning]:after {
    content: '\f071'; }
  .alert[class*=alert-icon-].alert-info:after, .alert[class*=alert-icon-][class*=alert-info]:after, .alert[class*=alert-icon-][class*=bg-info]:after {
    content: '\f129'; }
  .alert.alert-icon-right:after {
    left: auto;
    right: -4rem; }

.media-list .media {
  padding: 1.25rem;
  margin-top: 0; }
  .media-list .media .media-left {
    padding-right: 1rem; }
  .media-list .media .media-right {
    padding-left: 1rem; }

.media-list a.media {
  color: #404e67 !important; }

.media-bordered .media {
  border-top: 1px solid #E4E7ED; }
  .media-bordered .media:first-child {
    border-top: 0; }

/*=========================================================================================
  File Name: progress.scss
  Description: Extended bootstrap progress bar scss.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
  ----------------------------------------------------------------------------------------

  Modifiers:       `progress-lg`
                   `progress-md`
                   `progress-sm`
                   `progress-xs`

==========================================================================================*/
.progress {
  margin-bottom: 3rem; }
  .progress:last-child {
    margin-bottom: 1rem; }

/* ===============================================================================================
  File Name: list-group.scss
  Description: Contain list item, list group related extended SCSS.
  ----------------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
================================================================================================*/
ul.list-inline li {
  display: inline-block; }

ul.list-inline.list-inline-pipe > li + li:before {
  content: ' | ';
  color: #626e82; }

/* Inline users list - Use in Widget page */
/*---------------------------------------*/
.users-list li + li {
  margin-left: -.785rem; }

.users-list li img {
  border: 2px solid #fff; }

.users-list li .badge {
  border: 2px solid #fff;
  border-radius: 50%;
  padding: 0.4rem 0.4rem; }

.toast-bs-container {
  z-index: 1040;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%; }
  .toast-bs-container .toast-position {
    position: relative;
    top: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap-reverse; }
    .toast-bs-container .toast-position .toast.show {
      opacity: 1;
      z-index: 1030; }

.toast-placement {
  position: static;
  top: 0; }
  .toast-placement .toast {
    position: absolute;
    top: 0;
    z-index: 1030; }

.toast {
  display: none;
  background-color: white;
  margin-top: .75rem; }

.toast.show.toast-wrapper {
  position: static; }

.toast.toast-translucent {
  opacity: 1;
  display: block; }

.toast-header img {
  width: 20px;
  height: 20px; }

.modal-sm {
  max-width: 400px; }

.modal-xs {
  max-width: 300px; }

.modal-xl {
  max-width: 94%;
  margin-left: 3%;
  margin-right: 3%; }

.icon-align {
  margin-top: 0.6rem;
  margin-left: 0.5rem; }

.popover.popover-top:after, .popover.popover-top:before, .popover.bs-tether-element-attached-top:after, .popover.bs-tether-element-attached-top:before {
  margin-left: -10px; }

.popover.popover-right:after, .popover.popover-right:before, .popover.bs-tether-element-attached-right:after, .popover.bs-tether-element-attached-right:before {
  margin-top: -10px; }

.popover.popover-bottom:after, .popover.popover-bottom:before, .popover.bs-tether-element-attached-bottom:after, .popover.bs-tether-element-attached-bottom:before {
  margin-left: -10px; }

.popover.popover-left:after, .popover.popover-left:before, .popover.bs-tether-element-attached-left:after, .popover.bs-tether-element-attached-left:before {
  margin-top: -10px; }

.icon-bg-circle {
  color: #fff;
  padding: 0.5rem;
  border-radius: 50%; }

.bullet {
  height: 10px;
  width: 10px;
  border-radius: 50%;
  display: inline-block; }

.icon-left {
  margin-right: 0.5rem; }

.icon-right {
  margin-right: 0.5rem; }

.icon-spin {
  display: inline-block;
  animation: spin 1s infinite linear; }

.blockOverlay {
  z-index: 1050 !important; }

.blockElement, .blockPage {
  z-index: 1051 !important; }

@-moz-keyframes spin {
  from {
    -moz-transform: rotate(0deg); }
  to {
    -moz-transform: rotate(360deg); } }

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg); } }

@keyframes spin {
  from {
    transform: rotate(0deg); }
  to {
    transform: rotate(360deg); } }

.hidden {
  display: none;
  visibility: hidden; }

a:hover {
  cursor: pointer; }

.round {
  border-radius: 1.5rem; }

.square {
  border-radius: 0; }

.mega-dropdown-menu p.accordion-text {
  line-height: 1.45; }

.mega-dropdown-menu a[aria-expanded="true"] {
  padding-bottom: 1rem; }

.line-on-side {
  border-bottom: 1px solid #dadada;
  line-height: 0.1em;
  margin: 10px 0 20px; }

.line-on-side span {
  background: #fff;
  padding: 0 10px; }

.icon-line-height {
  line-height: 1.5rem !important; }

.table-middle td {
  vertical-align: middle; }

.spinner {
  display: inline-block;
  -webkit-animation: spin 1s linear infinite;
  -o-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite; }

@keyframes spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

@media only screen and (max-width: 576px) {
  .line-on-side {
    border-bottom: none;
    line-height: 1.25rem; } }

.white {
  color: #FFFFFF !important; }

.bg-white {
  background-color: #FFFFFF !important; }
  .bg-white .card-header,
  .bg-white .card-footer {
    background-color: transparent; }

.alert-white {
  border-color: white !important;
  background-color: white !important;
  color: #a6a6a6 !important; }
  .alert-white .alert-link {
    color: #919191 !important; }

.bullet.bullet-white {
  background-color: #FFFFFF; }

.bg-light-white {
  background-color: rgba(255, 255, 255, 0.15); }

.border-white {
  border-color: #FFFFFF; }

.bg-white.badge-glow,
.border-white.badge-glow {
  box-shadow: 0px 0px 10px #FFFFFF; }

.overlay-white {
  background: #FFFFFF;
  /* The Fallback */
  background: rgba(255, 255, 255, 0.8); }

/* .card-outline-white{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-white {
  border-color: !important;
  background-color: #FFFFFF !important;
  color: #FFFFFF; }
  .btn-white:hover {
    border-color: !important;
    background-color: !important;
    color: #FFF !important; }
  .btn-white:focus, .btn-white:active {
    border-color: !important;
    background-color: !important;
    color: #FFF !important; }

.btn-outline-white {
  border-color: #FFFFFF;
  background-color: transparent;
  color: #FFFFFF; }
  .btn-outline-white:hover {
    background-color: #FFFFFF;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-white:before {
  background-color: #FFFFFF; }

input[type="checkbox"].bg-white + .custom-control-label:before, input[type="radio"].bg-white + .custom-control-label:before {
  background-color: #FFFFFF !important; }

input:focus ~ .bg-white {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFFFF !important; }

.border-white {
  border: 1px solid #FFFFFF !important; }

.border-top-white {
  border-top: 1px solid #FFFFFF; }

.border-bottom-white {
  border-bottom: 1px solid #FFFFFF; }

.border-left-white {
  border-left: 1px solid #FFFFFF; }

.border-right-white {
  border-right: 1px solid #FFFFFF; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=white]:before {
  background-color: #FFFFFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFFFFF; }

.black {
  color: #000000 !important; }

.bg-black {
  background-color: #000000 !important; }
  .bg-black .card-header,
  .bg-black .card-footer {
    background-color: transparent; }

.alert-black {
  border-color: #242424 !important;
  background-color: #242424 !important;
  color: black !important; }
  .alert-black .alert-link {
    color: black !important; }

.bullet.bullet-black {
  background-color: #000000; }

.bg-light-black {
  background-color: rgba(0, 0, 0, 0.15); }

.border-black {
  border-color: #000000; }

.bg-black.badge-glow,
.border-black.badge-glow {
  box-shadow: 0px 0px 10px #000000; }

.overlay-black {
  background: #000000;
  /* The Fallback */
  background: rgba(0, 0, 0, 0.8); }

/* .card-outline-black{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-black {
  border-color: !important;
  background-color: #000000 !important;
  color: #FFFFFF; }
  .btn-black:hover {
    border-color: !important;
    background-color: !important;
    color: #FFF !important; }
  .btn-black:focus, .btn-black:active {
    border-color: !important;
    background-color: !important;
    color: #FFF !important; }

.btn-outline-black {
  border-color: #000000;
  background-color: transparent;
  color: #000000; }
  .btn-outline-black:hover {
    background-color: #000000;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-black:before {
  background-color: #000000; }

input[type="checkbox"].bg-black + .custom-control-label:before, input[type="radio"].bg-black + .custom-control-label:before {
  background-color: #000000 !important; }

input:focus ~ .bg-black {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000 !important; }

.border-black {
  border: 1px solid #000000 !important; }

.border-top-black {
  border-top: 1px solid #000000; }

.border-bottom-black {
  border-bottom: 1px solid #000000; }

.border-left-black {
  border-left: 1px solid #000000; }

.border-right-black {
  border-right: 1px solid #000000; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=black]:before {
  background-color: #000000; }

.edit-kanban-item select option.bg-color_name {
  background-color: #000000; }

.primary.lighten-5 {
  color: #39fcff !important; }

.bg-primary.bg-lighten-5 {
  background-color: #39fcff !important; }

.btn-primary.btn-lighten-5 {
  border-color: #008385 !important;
  background-color: #39fcff !important; }
  .btn-primary.btn-lighten-5:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-lighten-5:focus, .btn-primary.btn-lighten-5:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-lighten-5 {
  border-color: #39fcff !important;
  color: #39fcff !important; }
  .btn-outline-primary.btn-outline-lighten-5:hover {
    background-color: #39fcff !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #39fcff !important; }

.border-primary.border-lighten-5 {
  border: 1px solid #39fcff !important; }

.border-top-primary.border-top-lighten-5 {
  border-top: 1px solid #39fcff !important; }

.border-bottom-primary.border-bottom-lighten-5 {
  border-bottom: 1px solid #39fcff !important; }

.border-left-primary.border-left-lighten-5 {
  border-left: 1px solid #39fcff !important; }

.border-right-primary.border-right-lighten-5 {
  border-right: 1px solid #39fcff !important; }

.overlay-primary.overlay-lighten-5 {
  background: #39fcff;
  /* The Fallback */
  background: rgba(57, 252, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #39fcff; }

.edit-kanban-item select option.bg-color_name {
  background-color: #39fcff; }

.primary.lighten-4 {
  color: #1ffbff !important; }

.bg-primary.bg-lighten-4 {
  background-color: #1ffbff !important; }

.btn-primary.btn-lighten-4 {
  border-color: #008385 !important;
  background-color: #1ffbff !important; }
  .btn-primary.btn-lighten-4:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-lighten-4:focus, .btn-primary.btn-lighten-4:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-lighten-4 {
  border-color: #1ffbff !important;
  color: #1ffbff !important; }
  .btn-outline-primary.btn-outline-lighten-4:hover {
    background-color: #1ffbff !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1ffbff !important; }

.border-primary.border-lighten-4 {
  border: 1px solid #1ffbff !important; }

.border-top-primary.border-top-lighten-4 {
  border-top: 1px solid #1ffbff !important; }

.border-bottom-primary.border-bottom-lighten-4 {
  border-bottom: 1px solid #1ffbff !important; }

.border-left-primary.border-left-lighten-4 {
  border-left: 1px solid #1ffbff !important; }

.border-right-primary.border-right-lighten-4 {
  border-right: 1px solid #1ffbff !important; }

.overlay-primary.overlay-lighten-4 {
  background: #1ffbff;
  /* The Fallback */
  background: rgba(31, 251, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #1ffbff; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1ffbff; }

.primary.lighten-3 {
  color: #06fbff !important; }

.bg-primary.bg-lighten-3 {
  background-color: #06fbff !important; }

.btn-primary.btn-lighten-3 {
  border-color: #008385 !important;
  background-color: #06fbff !important; }
  .btn-primary.btn-lighten-3:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-lighten-3:focus, .btn-primary.btn-lighten-3:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-lighten-3 {
  border-color: #06fbff !important;
  color: #06fbff !important; }
  .btn-outline-primary.btn-outline-lighten-3:hover {
    background-color: #06fbff !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #06fbff !important; }

.border-primary.border-lighten-3 {
  border: 1px solid #06fbff !important; }

.border-top-primary.border-top-lighten-3 {
  border-top: 1px solid #06fbff !important; }

.border-bottom-primary.border-bottom-lighten-3 {
  border-bottom: 1px solid #06fbff !important; }

.border-left-primary.border-left-lighten-3 {
  border-left: 1px solid #06fbff !important; }

.border-right-primary.border-right-lighten-3 {
  border-right: 1px solid #06fbff !important; }

.overlay-primary.overlay-lighten-3 {
  background: #06fbff;
  /* The Fallback */
  background: rgba(6, 251, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #06fbff; }

.edit-kanban-item select option.bg-color_name {
  background-color: #06fbff; }

.primary.lighten-2 {
  color: #00e7eb !important; }

.bg-primary.bg-lighten-2 {
  background-color: #00e7eb !important; }

.btn-primary.btn-lighten-2 {
  border-color: #008385 !important;
  background-color: #00e7eb !important; }
  .btn-primary.btn-lighten-2:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-lighten-2:focus, .btn-primary.btn-lighten-2:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-lighten-2 {
  border-color: #00e7eb !important;
  color: #00e7eb !important; }
  .btn-outline-primary.btn-outline-lighten-2:hover {
    background-color: #00e7eb !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00e7eb !important; }

.border-primary.border-lighten-2 {
  border: 1px solid #00e7eb !important; }

.border-top-primary.border-top-lighten-2 {
  border-top: 1px solid #00e7eb !important; }

.border-bottom-primary.border-bottom-lighten-2 {
  border-bottom: 1px solid #00e7eb !important; }

.border-left-primary.border-left-lighten-2 {
  border-left: 1px solid #00e7eb !important; }

.border-right-primary.border-right-lighten-2 {
  border-right: 1px solid #00e7eb !important; }

.overlay-primary.overlay-lighten-2 {
  background: #00e7eb;
  /* The Fallback */
  background: rgba(0, 231, 235, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #00e7eb; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00e7eb; }

.primary.lighten-1 {
  color: #00ced2 !important; }

.bg-primary.bg-lighten-1 {
  background-color: #00ced2 !important; }

.btn-primary.btn-lighten-1 {
  border-color: #008385 !important;
  background-color: #00ced2 !important; }
  .btn-primary.btn-lighten-1:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-lighten-1:focus, .btn-primary.btn-lighten-1:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-lighten-1 {
  border-color: #00ced2 !important;
  color: #00ced2 !important; }
  .btn-outline-primary.btn-outline-lighten-1:hover {
    background-color: #00ced2 !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00ced2 !important; }

.border-primary.border-lighten-1 {
  border: 1px solid #00ced2 !important; }

.border-top-primary.border-top-lighten-1 {
  border-top: 1px solid #00ced2 !important; }

.border-bottom-primary.border-bottom-lighten-1 {
  border-bottom: 1px solid #00ced2 !important; }

.border-left-primary.border-left-lighten-1 {
  border-left: 1px solid #00ced2 !important; }

.border-right-primary.border-right-lighten-1 {
  border-right: 1px solid #00ced2 !important; }

.overlay-primary.overlay-lighten-1 {
  background: #00ced2;
  /* The Fallback */
  background: rgba(0, 206, 210, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #00ced2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00ced2; }

.primary {
  color: #00b5b8 !important; }

.bg-primary {
  background-color: #00b5b8 !important; }
  .bg-primary .card-header,
  .bg-primary .card-footer {
    background-color: transparent; }

.alert-primary {
  border-color: #00fbff !important;
  background-color: #00fbff !important;
  color: #000506 !important; }
  .alert-primary .alert-link {
    color: black !important; }

.bullet.bullet-primary {
  background-color: #00b5b8; }

.bg-light-primary {
  background-color: rgba(0, 181, 184, 0.15); }

.border-primary {
  border-color: #00b5b8; }

.bg-primary.badge-glow,
.border-primary.badge-glow {
  box-shadow: 0px 0px 10px #00b5b8; }

.overlay-primary {
  background: #00b5b8;
  /* The Fallback */
  background: rgba(0, 181, 184, 0.8); }

/* .card-outline-primary{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-primary {
  border-color: !important;
  background-color: #00b5b8 !important;
  color: #FFFFFF; }
  .btn-primary:hover {
    border-color: #009c9f !important;
    background-color: #00ced2 !important;
    color: #FFF !important; }
  .btn-primary:focus, .btn-primary:active {
    border-color: #008385 !important;
    background-color: #006a6c !important;
    color: #FFF !important; }

.btn-outline-primary {
  border-color: #00b5b8;
  background-color: transparent;
  color: #00b5b8; }
  .btn-outline-primary:hover {
    background-color: #00b5b8;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-primary:before {
  background-color: #00b5b8; }

input[type="checkbox"].bg-primary + .custom-control-label:before, input[type="radio"].bg-primary + .custom-control-label:before {
  background-color: #00b5b8 !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00b5b8 !important; }

.border-primary {
  border: 1px solid #00b5b8 !important; }

.border-top-primary {
  border-top: 1px solid #00b5b8; }

.border-bottom-primary {
  border-bottom: 1px solid #00b5b8; }

.border-left-primary {
  border-left: 1px solid #00b5b8; }

.border-right-primary {
  border-right: 1px solid #00b5b8; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #00b5b8; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00b5b8; }

.primary.darken-1 {
  color: #009c9f !important; }

.bg-primary.bg-darken-1 {
  background-color: #009c9f !important; }

.btn-primary.btn-darken-1 {
  border-color: #008385 !important;
  background-color: #009c9f !important; }
  .btn-primary.btn-darken-1:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-darken-1:focus, .btn-primary.btn-darken-1:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-darken-1 {
  border-color: #009c9f !important;
  color: #009c9f !important; }
  .btn-outline-primary.btn-outline-darken-1:hover {
    background-color: #009c9f !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #009c9f !important; }

.border-primary.border-darken-1 {
  border: 1px solid #009c9f !important; }

.border-top-primary.border-top-darken-1 {
  border-top: 1px solid #009c9f !important; }

.border-bottom-primary.border-bottom-darken-1 {
  border-bottom: 1px solid #009c9f !important; }

.border-left-primary.border-left-darken-1 {
  border-left: 1px solid #009c9f !important; }

.border-right-primary.border-right-darken-1 {
  border-right: 1px solid #009c9f !important; }

.overlay-primary.overlay-darken-1 {
  background: #009c9f;
  /* The Fallback */
  background: rgba(0, 156, 159, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #009c9f; }

.edit-kanban-item select option.bg-color_name {
  background-color: #009c9f; }

.primary.darken-2 {
  color: #008385 !important; }

.bg-primary.bg-darken-2 {
  background-color: #008385 !important; }

.btn-primary.btn-darken-2 {
  border-color: #008385 !important;
  background-color: #008385 !important; }
  .btn-primary.btn-darken-2:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-darken-2:focus, .btn-primary.btn-darken-2:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-darken-2 {
  border-color: #008385 !important;
  color: #008385 !important; }
  .btn-outline-primary.btn-outline-darken-2:hover {
    background-color: #008385 !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #008385 !important; }

.border-primary.border-darken-2 {
  border: 1px solid #008385 !important; }

.border-top-primary.border-top-darken-2 {
  border-top: 1px solid #008385 !important; }

.border-bottom-primary.border-bottom-darken-2 {
  border-bottom: 1px solid #008385 !important; }

.border-left-primary.border-left-darken-2 {
  border-left: 1px solid #008385 !important; }

.border-right-primary.border-right-darken-2 {
  border-right: 1px solid #008385 !important; }

.overlay-primary.overlay-darken-2 {
  background: #008385;
  /* The Fallback */
  background: rgba(0, 131, 133, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #008385; }

.edit-kanban-item select option.bg-color_name {
  background-color: #008385; }

.primary.darken-3 {
  color: #006a6c !important; }

.bg-primary.bg-darken-3 {
  background-color: #006a6c !important; }

.btn-primary.btn-darken-3 {
  border-color: #008385 !important;
  background-color: #006a6c !important; }
  .btn-primary.btn-darken-3:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-darken-3:focus, .btn-primary.btn-darken-3:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-darken-3 {
  border-color: #006a6c !important;
  color: #006a6c !important; }
  .btn-outline-primary.btn-outline-darken-3:hover {
    background-color: #006a6c !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #006a6c !important; }

.border-primary.border-darken-3 {
  border: 1px solid #006a6c !important; }

.border-top-primary.border-top-darken-3 {
  border-top: 1px solid #006a6c !important; }

.border-bottom-primary.border-bottom-darken-3 {
  border-bottom: 1px solid #006a6c !important; }

.border-left-primary.border-left-darken-3 {
  border-left: 1px solid #006a6c !important; }

.border-right-primary.border-right-darken-3 {
  border-right: 1px solid #006a6c !important; }

.overlay-primary.overlay-darken-3 {
  background: #006a6c;
  /* The Fallback */
  background: rgba(0, 106, 108, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #006a6c; }

.edit-kanban-item select option.bg-color_name {
  background-color: #006a6c; }

.primary.darken-4 {
  color: #005152 !important; }

.bg-primary.bg-darken-4 {
  background-color: #005152 !important; }

.btn-primary.btn-darken-4 {
  border-color: #008385 !important;
  background-color: #005152 !important; }
  .btn-primary.btn-darken-4:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-darken-4:focus, .btn-primary.btn-darken-4:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-darken-4 {
  border-color: #005152 !important;
  color: #005152 !important; }
  .btn-outline-primary.btn-outline-darken-4:hover {
    background-color: #005152 !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #005152 !important; }

.border-primary.border-darken-4 {
  border: 1px solid #005152 !important; }

.border-top-primary.border-top-darken-4 {
  border-top: 1px solid #005152 !important; }

.border-bottom-primary.border-bottom-darken-4 {
  border-bottom: 1px solid #005152 !important; }

.border-left-primary.border-left-darken-4 {
  border-left: 1px solid #005152 !important; }

.border-right-primary.border-right-darken-4 {
  border-right: 1px solid #005152 !important; }

.overlay-primary.overlay-darken-4 {
  background: #005152;
  /* The Fallback */
  background: rgba(0, 81, 82, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #005152; }

.edit-kanban-item select option.bg-color_name {
  background-color: #005152; }

.primary.accent-1 {
  color: #BDFDFF !important; }

.bg-primary.bg-accent-1 {
  background-color: #BDFDFF !important; }

.btn-primary.btn-accent-1 {
  border-color: #008385 !important;
  background-color: #BDFDFF !important; }
  .btn-primary.btn-accent-1:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-accent-1:focus, .btn-primary.btn-accent-1:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-accent-1 {
  border-color: #BDFDFF !important;
  color: #BDFDFF !important; }
  .btn-outline-primary.btn-outline-accent-1:hover {
    background-color: #BDFDFF !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #BDFDFF !important; }

.border-primary.border-accent-1 {
  border: 1px solid #BDFDFF !important; }

.border-top-primary.border-top-accent-1 {
  border-top: 1px solid #BDFDFF !important; }

.border-bottom-primary.border-bottom-accent-1 {
  border-bottom: 1px solid #BDFDFF !important; }

.border-left-primary.border-left-accent-1 {
  border-left: 1px solid #BDFDFF !important; }

.border-right-primary.border-right-accent-1 {
  border-right: 1px solid #BDFDFF !important; }

.overlay-primary.overlay-accent-1 {
  background: #BDFDFF;
  /* The Fallback */
  background: rgba(189, 253, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #BDFDFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #BDFDFF; }

.primary.accent-2 {
  color: #8AFBFF !important; }

.bg-primary.bg-accent-2 {
  background-color: #8AFBFF !important; }

.btn-primary.btn-accent-2 {
  border-color: #008385 !important;
  background-color: #8AFBFF !important; }
  .btn-primary.btn-accent-2:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-accent-2:focus, .btn-primary.btn-accent-2:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-accent-2 {
  border-color: #8AFBFF !important;
  color: #8AFBFF !important; }
  .btn-outline-primary.btn-outline-accent-2:hover {
    background-color: #8AFBFF !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8AFBFF !important; }

.border-primary.border-accent-2 {
  border: 1px solid #8AFBFF !important; }

.border-top-primary.border-top-accent-2 {
  border-top: 1px solid #8AFBFF !important; }

.border-bottom-primary.border-bottom-accent-2 {
  border-bottom: 1px solid #8AFBFF !important; }

.border-left-primary.border-left-accent-2 {
  border-left: 1px solid #8AFBFF !important; }

.border-right-primary.border-right-accent-2 {
  border-right: 1px solid #8AFBFF !important; }

.overlay-primary.overlay-accent-2 {
  background: #8AFBFF;
  /* The Fallback */
  background: rgba(138, 251, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #8AFBFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #8AFBFF; }

.primary.accent-3 {
  color: #57FAFF !important; }

.bg-primary.bg-accent-3 {
  background-color: #57FAFF !important; }

.btn-primary.btn-accent-3 {
  border-color: #008385 !important;
  background-color: #57FAFF !important; }
  .btn-primary.btn-accent-3:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-accent-3:focus, .btn-primary.btn-accent-3:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-accent-3 {
  border-color: #57FAFF !important;
  color: #57FAFF !important; }
  .btn-outline-primary.btn-outline-accent-3:hover {
    background-color: #57FAFF !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #57FAFF !important; }

.border-primary.border-accent-3 {
  border: 1px solid #57FAFF !important; }

.border-top-primary.border-top-accent-3 {
  border-top: 1px solid #57FAFF !important; }

.border-bottom-primary.border-bottom-accent-3 {
  border-bottom: 1px solid #57FAFF !important; }

.border-left-primary.border-left-accent-3 {
  border-left: 1px solid #57FAFF !important; }

.border-right-primary.border-right-accent-3 {
  border-right: 1px solid #57FAFF !important; }

.overlay-primary.overlay-accent-3 {
  background: #57FAFF;
  /* The Fallback */
  background: rgba(87, 250, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #57FAFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #57FAFF; }

.primary.accent-4 {
  color: #3DF9FF !important; }

.bg-primary.bg-accent-4 {
  background-color: #3DF9FF !important; }

.btn-primary.btn-accent-4 {
  border-color: #008385 !important;
  background-color: #3DF9FF !important; }
  .btn-primary.btn-accent-4:hover {
    border-color: #008385 !important;
    background-color: #006a6c !important; }
  .btn-primary.btn-accent-4:focus, .btn-primary.btn-accent-4:active {
    border-color: #006a6c !important;
    background-color: #005152 !important; }

.btn-outline-primary.btn-outline-accent-4 {
  border-color: #3DF9FF !important;
  color: #3DF9FF !important; }
  .btn-outline-primary.btn-outline-accent-4:hover {
    background-color: #3DF9FF !important; }

input:focus ~ .bg-primary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #3DF9FF !important; }

.border-primary.border-accent-4 {
  border: 1px solid #3DF9FF !important; }

.border-top-primary.border-top-accent-4 {
  border-top: 1px solid #3DF9FF !important; }

.border-bottom-primary.border-bottom-accent-4 {
  border-bottom: 1px solid #3DF9FF !important; }

.border-left-primary.border-left-accent-4 {
  border-left: 1px solid #3DF9FF !important; }

.border-right-primary.border-right-accent-4 {
  border-right: 1px solid #3DF9FF !important; }

.overlay-primary.overlay-accent-4 {
  background: #3DF9FF;
  /* The Fallback */
  background: rgba(61, 249, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=primary]:before {
  background-color: #3DF9FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #3DF9FF; }

.secondary.lighten-5 {
  color: #7a8cac !important; }

.bg-secondary.bg-lighten-5 {
  background-color: #7a8cac !important; }

.btn-secondary.btn-lighten-5 {
  border-color: #2c3648 !important;
  background-color: #7a8cac !important; }
  .btn-secondary.btn-lighten-5:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-lighten-5:focus, .btn-secondary.btn-lighten-5:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-lighten-5 {
  border-color: #7a8cac !important;
  color: #7a8cac !important; }
  .btn-outline-secondary.btn-outline-lighten-5:hover {
    background-color: #7a8cac !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7a8cac !important; }

.border-secondary.border-lighten-5 {
  border: 1px solid #7a8cac !important; }

.border-top-secondary.border-top-lighten-5 {
  border-top: 1px solid #7a8cac !important; }

.border-bottom-secondary.border-bottom-lighten-5 {
  border-bottom: 1px solid #7a8cac !important; }

.border-left-secondary.border-left-lighten-5 {
  border-left: 1px solid #7a8cac !important; }

.border-right-secondary.border-right-lighten-5 {
  border-right: 1px solid #7a8cac !important; }

.overlay-secondary.overlay-lighten-5 {
  background: #7a8cac;
  /* The Fallback */
  background: rgba(122, 140, 172, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #7a8cac; }

.edit-kanban-item select option.bg-color_name {
  background-color: #7a8cac; }

.secondary.lighten-4 {
  color: #6a7fa3 !important; }

.bg-secondary.bg-lighten-4 {
  background-color: #6a7fa3 !important; }

.btn-secondary.btn-lighten-4 {
  border-color: #2c3648 !important;
  background-color: #6a7fa3 !important; }
  .btn-secondary.btn-lighten-4:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-lighten-4:focus, .btn-secondary.btn-lighten-4:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-lighten-4 {
  border-color: #6a7fa3 !important;
  color: #6a7fa3 !important; }
  .btn-outline-secondary.btn-outline-lighten-4:hover {
    background-color: #6a7fa3 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6a7fa3 !important; }

.border-secondary.border-lighten-4 {
  border: 1px solid #6a7fa3 !important; }

.border-top-secondary.border-top-lighten-4 {
  border-top: 1px solid #6a7fa3 !important; }

.border-bottom-secondary.border-bottom-lighten-4 {
  border-bottom: 1px solid #6a7fa3 !important; }

.border-left-secondary.border-left-lighten-4 {
  border-left: 1px solid #6a7fa3 !important; }

.border-right-secondary.border-right-lighten-4 {
  border-right: 1px solid #6a7fa3 !important; }

.overlay-secondary.overlay-lighten-4 {
  background: #6a7fa3;
  /* The Fallback */
  background: rgba(106, 127, 163, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #6a7fa3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #6a7fa3; }

.secondary.lighten-3 {
  color: #5d7296 !important; }

.bg-secondary.bg-lighten-3 {
  background-color: #5d7296 !important; }

.btn-secondary.btn-lighten-3 {
  border-color: #2c3648 !important;
  background-color: #5d7296 !important; }
  .btn-secondary.btn-lighten-3:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-lighten-3:focus, .btn-secondary.btn-lighten-3:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-lighten-3 {
  border-color: #5d7296 !important;
  color: #5d7296 !important; }
  .btn-outline-secondary.btn-outline-lighten-3:hover {
    background-color: #5d7296 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5d7296 !important; }

.border-secondary.border-lighten-3 {
  border: 1px solid #5d7296 !important; }

.border-top-secondary.border-top-lighten-3 {
  border-top: 1px solid #5d7296 !important; }

.border-bottom-secondary.border-bottom-lighten-3 {
  border-bottom: 1px solid #5d7296 !important; }

.border-left-secondary.border-left-lighten-3 {
  border-left: 1px solid #5d7296 !important; }

.border-right-secondary.border-right-lighten-3 {
  border-right: 1px solid #5d7296 !important; }

.overlay-secondary.overlay-lighten-3 {
  background: #5d7296;
  /* The Fallback */
  background: rgba(93, 114, 150, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #5d7296; }

.edit-kanban-item select option.bg-color_name {
  background-color: #5d7296; }

.secondary.lighten-2 {
  color: #546686 !important; }

.bg-secondary.bg-lighten-2 {
  background-color: #546686 !important; }

.btn-secondary.btn-lighten-2 {
  border-color: #2c3648 !important;
  background-color: #546686 !important; }
  .btn-secondary.btn-lighten-2:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-lighten-2:focus, .btn-secondary.btn-lighten-2:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-lighten-2 {
  border-color: #546686 !important;
  color: #546686 !important; }
  .btn-outline-secondary.btn-outline-lighten-2:hover {
    background-color: #546686 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #546686 !important; }

.border-secondary.border-lighten-2 {
  border: 1px solid #546686 !important; }

.border-top-secondary.border-top-lighten-2 {
  border-top: 1px solid #546686 !important; }

.border-bottom-secondary.border-bottom-lighten-2 {
  border-bottom: 1px solid #546686 !important; }

.border-left-secondary.border-left-lighten-2 {
  border-left: 1px solid #546686 !important; }

.border-right-secondary.border-right-lighten-2 {
  border-right: 1px solid #546686 !important; }

.overlay-secondary.overlay-lighten-2 {
  background: #546686;
  /* The Fallback */
  background: rgba(84, 102, 134, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #546686; }

.edit-kanban-item select option.bg-color_name {
  background-color: #546686; }

.secondary.lighten-1 {
  color: #4a5a77 !important; }

.bg-secondary.bg-lighten-1 {
  background-color: #4a5a77 !important; }

.btn-secondary.btn-lighten-1 {
  border-color: #2c3648 !important;
  background-color: #4a5a77 !important; }
  .btn-secondary.btn-lighten-1:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-lighten-1:focus, .btn-secondary.btn-lighten-1:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-lighten-1 {
  border-color: #4a5a77 !important;
  color: #4a5a77 !important; }
  .btn-outline-secondary.btn-outline-lighten-1:hover {
    background-color: #4a5a77 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4a5a77 !important; }

.border-secondary.border-lighten-1 {
  border: 1px solid #4a5a77 !important; }

.border-top-secondary.border-top-lighten-1 {
  border-top: 1px solid #4a5a77 !important; }

.border-bottom-secondary.border-bottom-lighten-1 {
  border-bottom: 1px solid #4a5a77 !important; }

.border-left-secondary.border-left-lighten-1 {
  border-left: 1px solid #4a5a77 !important; }

.border-right-secondary.border-right-lighten-1 {
  border-right: 1px solid #4a5a77 !important; }

.overlay-secondary.overlay-lighten-1 {
  background: #4a5a77;
  /* The Fallback */
  background: rgba(74, 90, 119, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #4a5a77; }

.edit-kanban-item select option.bg-color_name {
  background-color: #4a5a77; }

.secondary {
  color: #404e67 !important; }

.bg-secondary {
  background-color: #404e67 !important; }
  .bg-secondary .card-header,
  .bg-secondary .card-footer {
    background-color: transparent; }

.alert-secondary {
  border-color: #5b6f93 !important;
  background-color: #5b6f93 !important;
  color: black !important; }
  .alert-secondary .alert-link {
    color: black !important; }

.bullet.bullet-secondary {
  background-color: #404e67; }

.bg-light-secondary {
  background-color: rgba(64, 78, 103, 0.15); }

.border-secondary {
  border-color: #404e67; }

.bg-secondary.badge-glow,
.border-secondary.badge-glow {
  box-shadow: 0px 0px 10px #404e67; }

.overlay-secondary {
  background: #404e67;
  /* The Fallback */
  background: rgba(64, 78, 103, 0.8); }

/* .card-outline-secondary{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-secondary {
  border-color: !important;
  background-color: #404e67 !important;
  color: #FFFFFF; }
  .btn-secondary:hover {
    border-color: #364257 !important;
    background-color: #4a5a77 !important;
    color: #FFF !important; }
  .btn-secondary:focus, .btn-secondary:active {
    border-color: #2c3648 !important;
    background-color: #232a38 !important;
    color: #FFF !important; }

.btn-outline-secondary {
  border-color: #404e67;
  background-color: transparent;
  color: #404e67; }
  .btn-outline-secondary:hover {
    background-color: #404e67;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-secondary:before {
  background-color: #404e67; }

input[type="checkbox"].bg-secondary + .custom-control-label:before, input[type="radio"].bg-secondary + .custom-control-label:before {
  background-color: #404e67 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #404e67 !important; }

.border-secondary {
  border: 1px solid #404e67 !important; }

.border-top-secondary {
  border-top: 1px solid #404e67; }

.border-bottom-secondary {
  border-bottom: 1px solid #404e67; }

.border-left-secondary {
  border-left: 1px solid #404e67; }

.border-right-secondary {
  border-right: 1px solid #404e67; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #404e67; }

.edit-kanban-item select option.bg-color_name {
  background-color: #404e67; }

.secondary.darken-1 {
  color: #364257 !important; }

.bg-secondary.bg-darken-1 {
  background-color: #364257 !important; }

.btn-secondary.btn-darken-1 {
  border-color: #2c3648 !important;
  background-color: #364257 !important; }
  .btn-secondary.btn-darken-1:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-darken-1:focus, .btn-secondary.btn-darken-1:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-darken-1 {
  border-color: #364257 !important;
  color: #364257 !important; }
  .btn-outline-secondary.btn-outline-darken-1:hover {
    background-color: #364257 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #364257 !important; }

.border-secondary.border-darken-1 {
  border: 1px solid #364257 !important; }

.border-top-secondary.border-top-darken-1 {
  border-top: 1px solid #364257 !important; }

.border-bottom-secondary.border-bottom-darken-1 {
  border-bottom: 1px solid #364257 !important; }

.border-left-secondary.border-left-darken-1 {
  border-left: 1px solid #364257 !important; }

.border-right-secondary.border-right-darken-1 {
  border-right: 1px solid #364257 !important; }

.overlay-secondary.overlay-darken-1 {
  background: #364257;
  /* The Fallback */
  background: rgba(54, 66, 87, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #364257; }

.edit-kanban-item select option.bg-color_name {
  background-color: #364257; }

.secondary.darken-2 {
  color: #2c3648 !important; }

.bg-secondary.bg-darken-2 {
  background-color: #2c3648 !important; }

.btn-secondary.btn-darken-2 {
  border-color: #2c3648 !important;
  background-color: #2c3648 !important; }
  .btn-secondary.btn-darken-2:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-darken-2:focus, .btn-secondary.btn-darken-2:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-darken-2 {
  border-color: #2c3648 !important;
  color: #2c3648 !important; }
  .btn-outline-secondary.btn-outline-darken-2:hover {
    background-color: #2c3648 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2c3648 !important; }

.border-secondary.border-darken-2 {
  border: 1px solid #2c3648 !important; }

.border-top-secondary.border-top-darken-2 {
  border-top: 1px solid #2c3648 !important; }

.border-bottom-secondary.border-bottom-darken-2 {
  border-bottom: 1px solid #2c3648 !important; }

.border-left-secondary.border-left-darken-2 {
  border-left: 1px solid #2c3648 !important; }

.border-right-secondary.border-right-darken-2 {
  border-right: 1px solid #2c3648 !important; }

.overlay-secondary.overlay-darken-2 {
  background: #2c3648;
  /* The Fallback */
  background: rgba(44, 54, 72, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #2c3648; }

.edit-kanban-item select option.bg-color_name {
  background-color: #2c3648; }

.secondary.darken-3 {
  color: #232a38 !important; }

.bg-secondary.bg-darken-3 {
  background-color: #232a38 !important; }

.btn-secondary.btn-darken-3 {
  border-color: #2c3648 !important;
  background-color: #232a38 !important; }
  .btn-secondary.btn-darken-3:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-darken-3:focus, .btn-secondary.btn-darken-3:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-darken-3 {
  border-color: #232a38 !important;
  color: #232a38 !important; }
  .btn-outline-secondary.btn-outline-darken-3:hover {
    background-color: #232a38 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #232a38 !important; }

.border-secondary.border-darken-3 {
  border: 1px solid #232a38 !important; }

.border-top-secondary.border-top-darken-3 {
  border-top: 1px solid #232a38 !important; }

.border-bottom-secondary.border-bottom-darken-3 {
  border-bottom: 1px solid #232a38 !important; }

.border-left-secondary.border-left-darken-3 {
  border-left: 1px solid #232a38 !important; }

.border-right-secondary.border-right-darken-3 {
  border-right: 1px solid #232a38 !important; }

.overlay-secondary.overlay-darken-3 {
  background: #232a38;
  /* The Fallback */
  background: rgba(35, 42, 56, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #232a38; }

.edit-kanban-item select option.bg-color_name {
  background-color: #232a38; }

.secondary.darken-4 {
  color: #191e28 !important; }

.bg-secondary.bg-darken-4 {
  background-color: #191e28 !important; }

.btn-secondary.btn-darken-4 {
  border-color: #2c3648 !important;
  background-color: #191e28 !important; }
  .btn-secondary.btn-darken-4:hover {
    border-color: #2c3648 !important;
    background-color: #232a38 !important; }
  .btn-secondary.btn-darken-4:focus, .btn-secondary.btn-darken-4:active {
    border-color: #232a38 !important;
    background-color: #191e28 !important; }

.btn-outline-secondary.btn-outline-darken-4 {
  border-color: #191e28 !important;
  color: #191e28 !important; }
  .btn-outline-secondary.btn-outline-darken-4:hover {
    background-color: #191e28 !important; }

input:focus ~ .bg-secondary {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #191e28 !important; }

.border-secondary.border-darken-4 {
  border: 1px solid #191e28 !important; }

.border-top-secondary.border-top-darken-4 {
  border-top: 1px solid #191e28 !important; }

.border-bottom-secondary.border-bottom-darken-4 {
  border-bottom: 1px solid #191e28 !important; }

.border-left-secondary.border-left-darken-4 {
  border-left: 1px solid #191e28 !important; }

.border-right-secondary.border-right-darken-4 {
  border-right: 1px solid #191e28 !important; }

.overlay-secondary.overlay-darken-4 {
  background: #191e28;
  /* The Fallback */
  background: rgba(25, 30, 40, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=secondary]:before {
  background-color: #191e28; }

.edit-kanban-item select option.bg-color_name {
  background-color: #191e28; }

.success.lighten-5 {
  color: #78f1cc !important; }

.bg-success.bg-lighten-5 {
  background-color: #78f1cc !important; }

.btn-success.btn-lighten-5 {
  border-color: #11a578 !important;
  background-color: #78f1cc !important; }
  .btn-success.btn-lighten-5:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-lighten-5:focus, .btn-success.btn-lighten-5:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-lighten-5 {
  border-color: #78f1cc !important;
  color: #78f1cc !important; }
  .btn-outline-success.btn-outline-lighten-5:hover {
    background-color: #78f1cc !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #78f1cc !important; }

.border-success.border-lighten-5 {
  border: 1px solid #78f1cc !important; }

.border-top-success.border-top-lighten-5 {
  border-top: 1px solid #78f1cc !important; }

.border-bottom-success.border-bottom-lighten-5 {
  border-bottom: 1px solid #78f1cc !important; }

.border-left-success.border-left-lighten-5 {
  border-left: 1px solid #78f1cc !important; }

.border-right-success.border-right-lighten-5 {
  border-right: 1px solid #78f1cc !important; }

.overlay-success.overlay-lighten-5 {
  background: #78f1cc;
  /* The Fallback */
  background: rgba(120, 241, 204, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #78f1cc; }

.edit-kanban-item select option.bg-color_name {
  background-color: #78f1cc; }

.success.lighten-4 {
  color: #61eec4 !important; }

.bg-success.bg-lighten-4 {
  background-color: #61eec4 !important; }

.btn-success.btn-lighten-4 {
  border-color: #11a578 !important;
  background-color: #61eec4 !important; }
  .btn-success.btn-lighten-4:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-lighten-4:focus, .btn-success.btn-lighten-4:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-lighten-4 {
  border-color: #61eec4 !important;
  color: #61eec4 !important; }
  .btn-outline-success.btn-outline-lighten-4:hover {
    background-color: #61eec4 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #61eec4 !important; }

.border-success.border-lighten-4 {
  border: 1px solid #61eec4 !important; }

.border-top-success.border-top-lighten-4 {
  border-top: 1px solid #61eec4 !important; }

.border-bottom-success.border-bottom-lighten-4 {
  border-bottom: 1px solid #61eec4 !important; }

.border-left-success.border-left-lighten-4 {
  border-left: 1px solid #61eec4 !important; }

.border-right-success.border-right-lighten-4 {
  border-right: 1px solid #61eec4 !important; }

.overlay-success.overlay-lighten-4 {
  background: #61eec4;
  /* The Fallback */
  background: rgba(97, 238, 196, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #61eec4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #61eec4; }

.success.lighten-3 {
  color: #49ecbb !important; }

.bg-success.bg-lighten-3 {
  background-color: #49ecbb !important; }

.btn-success.btn-lighten-3 {
  border-color: #11a578 !important;
  background-color: #49ecbb !important; }
  .btn-success.btn-lighten-3:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-lighten-3:focus, .btn-success.btn-lighten-3:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-lighten-3 {
  border-color: #49ecbb !important;
  color: #49ecbb !important; }
  .btn-outline-success.btn-outline-lighten-3:hover {
    background-color: #49ecbb !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #49ecbb !important; }

.border-success.border-lighten-3 {
  border: 1px solid #49ecbb !important; }

.border-top-success.border-top-lighten-3 {
  border-top: 1px solid #49ecbb !important; }

.border-bottom-success.border-bottom-lighten-3 {
  border-bottom: 1px solid #49ecbb !important; }

.border-left-success.border-left-lighten-3 {
  border-left: 1px solid #49ecbb !important; }

.border-right-success.border-right-lighten-3 {
  border-right: 1px solid #49ecbb !important; }

.overlay-success.overlay-lighten-3 {
  background: #49ecbb;
  /* The Fallback */
  background: rgba(73, 236, 187, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #49ecbb; }

.edit-kanban-item select option.bg-color_name {
  background-color: #49ecbb; }

.success.lighten-2 {
  color: #32eab2 !important; }

.bg-success.bg-lighten-2 {
  background-color: #32eab2 !important; }

.btn-success.btn-lighten-2 {
  border-color: #11a578 !important;
  background-color: #32eab2 !important; }
  .btn-success.btn-lighten-2:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-lighten-2:focus, .btn-success.btn-lighten-2:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-lighten-2 {
  border-color: #32eab2 !important;
  color: #32eab2 !important; }
  .btn-outline-success.btn-outline-lighten-2:hover {
    background-color: #32eab2 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #32eab2 !important; }

.border-success.border-lighten-2 {
  border: 1px solid #32eab2 !important; }

.border-top-success.border-top-lighten-2 {
  border-top: 1px solid #32eab2 !important; }

.border-bottom-success.border-bottom-lighten-2 {
  border-bottom: 1px solid #32eab2 !important; }

.border-left-success.border-left-lighten-2 {
  border-left: 1px solid #32eab2 !important; }

.border-right-success.border-right-lighten-2 {
  border-right: 1px solid #32eab2 !important; }

.overlay-success.overlay-lighten-2 {
  background: #32eab2;
  /* The Fallback */
  background: rgba(50, 234, 178, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #32eab2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #32eab2; }

.success.lighten-1 {
  color: #1be7aa !important; }

.bg-success.bg-lighten-1 {
  background-color: #1be7aa !important; }

.btn-success.btn-lighten-1 {
  border-color: #11a578 !important;
  background-color: #1be7aa !important; }
  .btn-success.btn-lighten-1:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-lighten-1:focus, .btn-success.btn-lighten-1:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-lighten-1 {
  border-color: #1be7aa !important;
  color: #1be7aa !important; }
  .btn-outline-success.btn-outline-lighten-1:hover {
    background-color: #1be7aa !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1be7aa !important; }

.border-success.border-lighten-1 {
  border: 1px solid #1be7aa !important; }

.border-top-success.border-top-lighten-1 {
  border-top: 1px solid #1be7aa !important; }

.border-bottom-success.border-bottom-lighten-1 {
  border-bottom: 1px solid #1be7aa !important; }

.border-left-success.border-left-lighten-1 {
  border-left: 1px solid #1be7aa !important; }

.border-right-success.border-right-lighten-1 {
  border-right: 1px solid #1be7aa !important; }

.overlay-success.overlay-lighten-1 {
  background: #1be7aa;
  /* The Fallback */
  background: rgba(27, 231, 170, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #1be7aa; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1be7aa; }

.success {
  color: #16d39a !important; }

.bg-success {
  background-color: #16d39a !important; }
  .bg-success .card-header,
  .bg-success .card-footer {
    background-color: transparent; }

.alert-success {
  border-color: #45ecb9 !important;
  background-color: #45ecb9 !important;
  color: #053124 !important; }
  .alert-success .alert-link {
    color: #010c09 !important; }

.bullet.bullet-success {
  background-color: #16d39a; }

.bg-light-success {
  background-color: rgba(22, 211, 154, 0.15); }

.border-success {
  border-color: #16d39a; }

.bg-success.badge-glow,
.border-success.badge-glow {
  box-shadow: 0px 0px 10px #16d39a; }

.overlay-success {
  background: #16d39a;
  /* The Fallback */
  background: rgba(22, 211, 154, 0.8); }

/* .card-outline-success{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-success {
  border-color: !important;
  background-color: #16d39a !important;
  color: #FFFFFF; }
  .btn-success:hover {
    border-color: #14bc89 !important;
    background-color: #1be7aa !important;
    color: #FFF !important; }
  .btn-success:focus, .btn-success:active {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important;
    color: #FFF !important; }

.btn-outline-success {
  border-color: #16d39a;
  background-color: transparent;
  color: #16d39a; }
  .btn-outline-success:hover {
    background-color: #16d39a;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-success:before {
  background-color: #16d39a; }

input[type="checkbox"].bg-success + .custom-control-label:before, input[type="radio"].bg-success + .custom-control-label:before {
  background-color: #16d39a !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #16d39a !important; }

.border-success {
  border: 1px solid #16d39a !important; }

.border-top-success {
  border-top: 1px solid #16d39a; }

.border-bottom-success {
  border-bottom: 1px solid #16d39a; }

.border-left-success {
  border-left: 1px solid #16d39a; }

.border-right-success {
  border-right: 1px solid #16d39a; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #16d39a; }

.edit-kanban-item select option.bg-color_name {
  background-color: #16d39a; }

.success.darken-1 {
  color: #14bc89 !important; }

.bg-success.bg-darken-1 {
  background-color: #14bc89 !important; }

.btn-success.btn-darken-1 {
  border-color: #11a578 !important;
  background-color: #14bc89 !important; }
  .btn-success.btn-darken-1:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-darken-1:focus, .btn-success.btn-darken-1:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-darken-1 {
  border-color: #14bc89 !important;
  color: #14bc89 !important; }
  .btn-outline-success.btn-outline-darken-1:hover {
    background-color: #14bc89 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #14bc89 !important; }

.border-success.border-darken-1 {
  border: 1px solid #14bc89 !important; }

.border-top-success.border-top-darken-1 {
  border-top: 1px solid #14bc89 !important; }

.border-bottom-success.border-bottom-darken-1 {
  border-bottom: 1px solid #14bc89 !important; }

.border-left-success.border-left-darken-1 {
  border-left: 1px solid #14bc89 !important; }

.border-right-success.border-right-darken-1 {
  border-right: 1px solid #14bc89 !important; }

.overlay-success.overlay-darken-1 {
  background: #14bc89;
  /* The Fallback */
  background: rgba(20, 188, 137, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #14bc89; }

.edit-kanban-item select option.bg-color_name {
  background-color: #14bc89; }

.success.darken-2 {
  color: #11a578 !important; }

.bg-success.bg-darken-2 {
  background-color: #11a578 !important; }

.btn-success.btn-darken-2 {
  border-color: #11a578 !important;
  background-color: #11a578 !important; }
  .btn-success.btn-darken-2:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-darken-2:focus, .btn-success.btn-darken-2:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-darken-2 {
  border-color: #11a578 !important;
  color: #11a578 !important; }
  .btn-outline-success.btn-outline-darken-2:hover {
    background-color: #11a578 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #11a578 !important; }

.border-success.border-darken-2 {
  border: 1px solid #11a578 !important; }

.border-top-success.border-top-darken-2 {
  border-top: 1px solid #11a578 !important; }

.border-bottom-success.border-bottom-darken-2 {
  border-bottom: 1px solid #11a578 !important; }

.border-left-success.border-left-darken-2 {
  border-left: 1px solid #11a578 !important; }

.border-right-success.border-right-darken-2 {
  border-right: 1px solid #11a578 !important; }

.overlay-success.overlay-darken-2 {
  background: #11a578;
  /* The Fallback */
  background: rgba(17, 165, 120, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #11a578; }

.edit-kanban-item select option.bg-color_name {
  background-color: #11a578; }

.success.darken-3 {
  color: #0f8e67 !important; }

.bg-success.bg-darken-3 {
  background-color: #0f8e67 !important; }

.btn-success.btn-darken-3 {
  border-color: #11a578 !important;
  background-color: #0f8e67 !important; }
  .btn-success.btn-darken-3:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-darken-3:focus, .btn-success.btn-darken-3:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-darken-3 {
  border-color: #0f8e67 !important;
  color: #0f8e67 !important; }
  .btn-outline-success.btn-outline-darken-3:hover {
    background-color: #0f8e67 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0f8e67 !important; }

.border-success.border-darken-3 {
  border: 1px solid #0f8e67 !important; }

.border-top-success.border-top-darken-3 {
  border-top: 1px solid #0f8e67 !important; }

.border-bottom-success.border-bottom-darken-3 {
  border-bottom: 1px solid #0f8e67 !important; }

.border-left-success.border-left-darken-3 {
  border-left: 1px solid #0f8e67 !important; }

.border-right-success.border-right-darken-3 {
  border-right: 1px solid #0f8e67 !important; }

.overlay-success.overlay-darken-3 {
  background: #0f8e67;
  /* The Fallback */
  background: rgba(15, 142, 103, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #0f8e67; }

.edit-kanban-item select option.bg-color_name {
  background-color: #0f8e67; }

.success.darken-4 {
  color: #0c7757 !important; }

.bg-success.bg-darken-4 {
  background-color: #0c7757 !important; }

.btn-success.btn-darken-4 {
  border-color: #11a578 !important;
  background-color: #0c7757 !important; }
  .btn-success.btn-darken-4:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-darken-4:focus, .btn-success.btn-darken-4:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-darken-4 {
  border-color: #0c7757 !important;
  color: #0c7757 !important; }
  .btn-outline-success.btn-outline-darken-4:hover {
    background-color: #0c7757 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0c7757 !important; }

.border-success.border-darken-4 {
  border: 1px solid #0c7757 !important; }

.border-top-success.border-top-darken-4 {
  border-top: 1px solid #0c7757 !important; }

.border-bottom-success.border-bottom-darken-4 {
  border-bottom: 1px solid #0c7757 !important; }

.border-left-success.border-left-darken-4 {
  border-left: 1px solid #0c7757 !important; }

.border-right-success.border-right-darken-4 {
  border-right: 1px solid #0c7757 !important; }

.overlay-success.overlay-darken-4 {
  background: #0c7757;
  /* The Fallback */
  background: rgba(12, 119, 87, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #0c7757; }

.edit-kanban-item select option.bg-color_name {
  background-color: #0c7757; }

.success.accent-1 {
  color: #E1FFF1 !important; }

.bg-success.bg-accent-1 {
  background-color: #E1FFF1 !important; }

.btn-success.btn-accent-1 {
  border-color: #11a578 !important;
  background-color: #E1FFF1 !important; }
  .btn-success.btn-accent-1:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-accent-1:focus, .btn-success.btn-accent-1:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-accent-1 {
  border-color: #E1FFF1 !important;
  color: #E1FFF1 !important; }
  .btn-outline-success.btn-outline-accent-1:hover {
    background-color: #E1FFF1 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E1FFF1 !important; }

.border-success.border-accent-1 {
  border: 1px solid #E1FFF1 !important; }

.border-top-success.border-top-accent-1 {
  border-top: 1px solid #E1FFF1 !important; }

.border-bottom-success.border-bottom-accent-1 {
  border-bottom: 1px solid #E1FFF1 !important; }

.border-left-success.border-left-accent-1 {
  border-left: 1px solid #E1FFF1 !important; }

.border-right-success.border-right-accent-1 {
  border-right: 1px solid #E1FFF1 !important; }

.overlay-success.overlay-accent-1 {
  background: #E1FFF1;
  /* The Fallback */
  background: rgba(225, 255, 241, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #E1FFF1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E1FFF1; }

.success.accent-2 {
  color: #AEFFD9 !important; }

.bg-success.bg-accent-2 {
  background-color: #AEFFD9 !important; }

.btn-success.btn-accent-2 {
  border-color: #11a578 !important;
  background-color: #AEFFD9 !important; }
  .btn-success.btn-accent-2:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-accent-2:focus, .btn-success.btn-accent-2:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-accent-2 {
  border-color: #AEFFD9 !important;
  color: #AEFFD9 !important; }
  .btn-outline-success.btn-outline-accent-2:hover {
    background-color: #AEFFD9 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #AEFFD9 !important; }

.border-success.border-accent-2 {
  border: 1px solid #AEFFD9 !important; }

.border-top-success.border-top-accent-2 {
  border-top: 1px solid #AEFFD9 !important; }

.border-bottom-success.border-bottom-accent-2 {
  border-bottom: 1px solid #AEFFD9 !important; }

.border-left-success.border-left-accent-2 {
  border-left: 1px solid #AEFFD9 !important; }

.border-right-success.border-right-accent-2 {
  border-right: 1px solid #AEFFD9 !important; }

.overlay-success.overlay-accent-2 {
  background: #AEFFD9;
  /* The Fallback */
  background: rgba(174, 255, 217, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #AEFFD9; }

.edit-kanban-item select option.bg-color_name {
  background-color: #AEFFD9; }

.success.accent-3 {
  color: #7BFFC1 !important; }

.bg-success.bg-accent-3 {
  background-color: #7BFFC1 !important; }

.btn-success.btn-accent-3 {
  border-color: #11a578 !important;
  background-color: #7BFFC1 !important; }
  .btn-success.btn-accent-3:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-accent-3:focus, .btn-success.btn-accent-3:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-accent-3 {
  border-color: #7BFFC1 !important;
  color: #7BFFC1 !important; }
  .btn-outline-success.btn-outline-accent-3:hover {
    background-color: #7BFFC1 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7BFFC1 !important; }

.border-success.border-accent-3 {
  border: 1px solid #7BFFC1 !important; }

.border-top-success.border-top-accent-3 {
  border-top: 1px solid #7BFFC1 !important; }

.border-bottom-success.border-bottom-accent-3 {
  border-bottom: 1px solid #7BFFC1 !important; }

.border-left-success.border-left-accent-3 {
  border-left: 1px solid #7BFFC1 !important; }

.border-right-success.border-right-accent-3 {
  border-right: 1px solid #7BFFC1 !important; }

.overlay-success.overlay-accent-3 {
  background: #7BFFC1;
  /* The Fallback */
  background: rgba(123, 255, 193, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #7BFFC1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #7BFFC1; }

.success.accent-4 {
  color: #62FFB5 !important; }

.bg-success.bg-accent-4 {
  background-color: #62FFB5 !important; }

.btn-success.btn-accent-4 {
  border-color: #11a578 !important;
  background-color: #62FFB5 !important; }
  .btn-success.btn-accent-4:hover {
    border-color: #11a578 !important;
    background-color: #0f8e67 !important; }
  .btn-success.btn-accent-4:focus, .btn-success.btn-accent-4:active {
    border-color: #0f8e67 !important;
    background-color: #0c7757 !important; }

.btn-outline-success.btn-outline-accent-4 {
  border-color: #62FFB5 !important;
  color: #62FFB5 !important; }
  .btn-outline-success.btn-outline-accent-4:hover {
    background-color: #62FFB5 !important; }

input:focus ~ .bg-success {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #62FFB5 !important; }

.border-success.border-accent-4 {
  border: 1px solid #62FFB5 !important; }

.border-top-success.border-top-accent-4 {
  border-top: 1px solid #62FFB5 !important; }

.border-bottom-success.border-bottom-accent-4 {
  border-bottom: 1px solid #62FFB5 !important; }

.border-left-success.border-left-accent-4 {
  border-left: 1px solid #62FFB5 !important; }

.border-right-success.border-right-accent-4 {
  border-right: 1px solid #62FFB5 !important; }

.overlay-success.overlay-accent-4 {
  background: #62FFB5;
  /* The Fallback */
  background: rgba(98, 255, 181, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=success]:before {
  background-color: #62FFB5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #62FFB5; }

.info.lighten-5 {
  color: #9ee8f2 !important; }

.bg-info.bg-lighten-5 {
  background-color: #9ee8f2 !important; }

.btn-info.btn-lighten-5 {
  border-color: #1ab0c3 !important;
  background-color: #9ee8f2 !important; }
  .btn-info.btn-lighten-5:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-lighten-5:focus, .btn-info.btn-lighten-5:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-lighten-5 {
  border-color: #9ee8f2 !important;
  color: #9ee8f2 !important; }
  .btn-outline-info.btn-outline-lighten-5:hover {
    background-color: #9ee8f2 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9ee8f2 !important; }

.border-info.border-lighten-5 {
  border: 1px solid #9ee8f2 !important; }

.border-top-info.border-top-lighten-5 {
  border-top: 1px solid #9ee8f2 !important; }

.border-bottom-info.border-bottom-lighten-5 {
  border-bottom: 1px solid #9ee8f2 !important; }

.border-left-info.border-left-lighten-5 {
  border-left: 1px solid #9ee8f2 !important; }

.border-right-info.border-right-lighten-5 {
  border-right: 1px solid #9ee8f2 !important; }

.overlay-info.overlay-lighten-5 {
  background: #9ee8f2;
  /* The Fallback */
  background: rgba(158, 232, 242, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #9ee8f2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #9ee8f2; }

.info.lighten-4 {
  color: #87e3ef !important; }

.bg-info.bg-lighten-4 {
  background-color: #87e3ef !important; }

.btn-info.btn-lighten-4 {
  border-color: #1ab0c3 !important;
  background-color: #87e3ef !important; }
  .btn-info.btn-lighten-4:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-lighten-4:focus, .btn-info.btn-lighten-4:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-lighten-4 {
  border-color: #87e3ef !important;
  color: #87e3ef !important; }
  .btn-outline-info.btn-outline-lighten-4:hover {
    background-color: #87e3ef !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #87e3ef !important; }

.border-info.border-lighten-4 {
  border: 1px solid #87e3ef !important; }

.border-top-info.border-top-lighten-4 {
  border-top: 1px solid #87e3ef !important; }

.border-bottom-info.border-bottom-lighten-4 {
  border-bottom: 1px solid #87e3ef !important; }

.border-left-info.border-left-lighten-4 {
  border-left: 1px solid #87e3ef !important; }

.border-right-info.border-right-lighten-4 {
  border-right: 1px solid #87e3ef !important; }

.overlay-info.overlay-lighten-4 {
  background: #87e3ef;
  /* The Fallback */
  background: rgba(135, 227, 239, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #87e3ef; }

.edit-kanban-item select option.bg-color_name {
  background-color: #87e3ef; }

.info.lighten-3 {
  color: #71deec !important; }

.bg-info.bg-lighten-3 {
  background-color: #71deec !important; }

.btn-info.btn-lighten-3 {
  border-color: #1ab0c3 !important;
  background-color: #71deec !important; }
  .btn-info.btn-lighten-3:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-lighten-3:focus, .btn-info.btn-lighten-3:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-lighten-3 {
  border-color: #71deec !important;
  color: #71deec !important; }
  .btn-outline-info.btn-outline-lighten-3:hover {
    background-color: #71deec !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #71deec !important; }

.border-info.border-lighten-3 {
  border: 1px solid #71deec !important; }

.border-top-info.border-top-lighten-3 {
  border-top: 1px solid #71deec !important; }

.border-bottom-info.border-bottom-lighten-3 {
  border-bottom: 1px solid #71deec !important; }

.border-left-info.border-left-lighten-3 {
  border-left: 1px solid #71deec !important; }

.border-right-info.border-right-lighten-3 {
  border-right: 1px solid #71deec !important; }

.overlay-info.overlay-lighten-3 {
  background: #71deec;
  /* The Fallback */
  background: rgba(113, 222, 236, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #71deec; }

.edit-kanban-item select option.bg-color_name {
  background-color: #71deec; }

.info.lighten-2 {
  color: #5ad9e9 !important; }

.bg-info.bg-lighten-2 {
  background-color: #5ad9e9 !important; }

.btn-info.btn-lighten-2 {
  border-color: #1ab0c3 !important;
  background-color: #5ad9e9 !important; }
  .btn-info.btn-lighten-2:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-lighten-2:focus, .btn-info.btn-lighten-2:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-lighten-2 {
  border-color: #5ad9e9 !important;
  color: #5ad9e9 !important; }
  .btn-outline-info.btn-outline-lighten-2:hover {
    background-color: #5ad9e9 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #5ad9e9 !important; }

.border-info.border-lighten-2 {
  border: 1px solid #5ad9e9 !important; }

.border-top-info.border-top-lighten-2 {
  border-top: 1px solid #5ad9e9 !important; }

.border-bottom-info.border-bottom-lighten-2 {
  border-bottom: 1px solid #5ad9e9 !important; }

.border-left-info.border-left-lighten-2 {
  border-left: 1px solid #5ad9e9 !important; }

.border-right-info.border-right-lighten-2 {
  border-right: 1px solid #5ad9e9 !important; }

.overlay-info.overlay-lighten-2 {
  background: #5ad9e9;
  /* The Fallback */
  background: rgba(90, 217, 233, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #5ad9e9; }

.edit-kanban-item select option.bg-color_name {
  background-color: #5ad9e9; }

.info.lighten-1 {
  color: #44d3e6 !important; }

.bg-info.bg-lighten-1 {
  background-color: #44d3e6 !important; }

.btn-info.btn-lighten-1 {
  border-color: #1ab0c3 !important;
  background-color: #44d3e6 !important; }
  .btn-info.btn-lighten-1:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-lighten-1:focus, .btn-info.btn-lighten-1:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-lighten-1 {
  border-color: #44d3e6 !important;
  color: #44d3e6 !important; }
  .btn-outline-info.btn-outline-lighten-1:hover {
    background-color: #44d3e6 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #44d3e6 !important; }

.border-info.border-lighten-1 {
  border: 1px solid #44d3e6 !important; }

.border-top-info.border-top-lighten-1 {
  border-top: 1px solid #44d3e6 !important; }

.border-bottom-info.border-bottom-lighten-1 {
  border-bottom: 1px solid #44d3e6 !important; }

.border-left-info.border-left-lighten-1 {
  border-left: 1px solid #44d3e6 !important; }

.border-right-info.border-right-lighten-1 {
  border-right: 1px solid #44d3e6 !important; }

.overlay-info.overlay-lighten-1 {
  background: #44d3e6;
  /* The Fallback */
  background: rgba(68, 211, 230, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #44d3e6; }

.edit-kanban-item select option.bg-color_name {
  background-color: #44d3e6; }

.info {
  color: #2dcee3 !important; }

.bg-info {
  background-color: #2dcee3 !important; }
  .bg-info .card-header,
  .bg-info .card-footer {
    background-color: transparent; }

.alert-info {
  border-color: #6cddeb !important;
  background-color: #6cddeb !important;
  color: #0b4a53 !important; }
  .alert-info .alert-link {
    color: #062a2f !important; }

.bullet.bullet-info {
  background-color: #2dcee3; }

.bg-light-info {
  background-color: rgba(45, 206, 227, 0.15); }

.border-info {
  border-color: #2dcee3; }

.bg-info.badge-glow,
.border-info.badge-glow {
  box-shadow: 0px 0px 10px #2dcee3; }

.overlay-info {
  background: #2dcee3;
  /* The Fallback */
  background: rgba(45, 206, 227, 0.8); }

/* .card-outline-info{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-info {
  border-color: !important;
  background-color: #2dcee3 !important;
  color: #FFFFFF; }
  .btn-info:hover {
    border-color: #1dc4da !important;
    background-color: #44d3e6 !important;
    color: #FFF !important; }
  .btn-info:focus, .btn-info:active {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important;
    color: #FFF !important; }

.btn-outline-info {
  border-color: #2dcee3;
  background-color: transparent;
  color: #2dcee3; }
  .btn-outline-info:hover {
    background-color: #2dcee3;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-info:before {
  background-color: #2dcee3; }

input[type="checkbox"].bg-info + .custom-control-label:before, input[type="radio"].bg-info + .custom-control-label:before {
  background-color: #2dcee3 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2dcee3 !important; }

.border-info {
  border: 1px solid #2dcee3 !important; }

.border-top-info {
  border-top: 1px solid #2dcee3; }

.border-bottom-info {
  border-bottom: 1px solid #2dcee3; }

.border-left-info {
  border-left: 1px solid #2dcee3; }

.border-right-info {
  border-right: 1px solid #2dcee3; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #2dcee3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #2dcee3; }

.info.darken-1 {
  color: #1dc4da !important; }

.bg-info.bg-darken-1 {
  background-color: #1dc4da !important; }

.btn-info.btn-darken-1 {
  border-color: #1ab0c3 !important;
  background-color: #1dc4da !important; }
  .btn-info.btn-darken-1:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-darken-1:focus, .btn-info.btn-darken-1:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-darken-1 {
  border-color: #1dc4da !important;
  color: #1dc4da !important; }
  .btn-outline-info.btn-outline-darken-1:hover {
    background-color: #1dc4da !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1dc4da !important; }

.border-info.border-darken-1 {
  border: 1px solid #1dc4da !important; }

.border-top-info.border-top-darken-1 {
  border-top: 1px solid #1dc4da !important; }

.border-bottom-info.border-bottom-darken-1 {
  border-bottom: 1px solid #1dc4da !important; }

.border-left-info.border-left-darken-1 {
  border-left: 1px solid #1dc4da !important; }

.border-right-info.border-right-darken-1 {
  border-right: 1px solid #1dc4da !important; }

.overlay-info.overlay-darken-1 {
  background: #1dc4da;
  /* The Fallback */
  background: rgba(29, 196, 218, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #1dc4da; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1dc4da; }

.info.darken-2 {
  color: #1ab0c3 !important; }

.bg-info.bg-darken-2 {
  background-color: #1ab0c3 !important; }

.btn-info.btn-darken-2 {
  border-color: #1ab0c3 !important;
  background-color: #1ab0c3 !important; }
  .btn-info.btn-darken-2:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-darken-2:focus, .btn-info.btn-darken-2:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-darken-2 {
  border-color: #1ab0c3 !important;
  color: #1ab0c3 !important; }
  .btn-outline-info.btn-outline-darken-2:hover {
    background-color: #1ab0c3 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1ab0c3 !important; }

.border-info.border-darken-2 {
  border: 1px solid #1ab0c3 !important; }

.border-top-info.border-top-darken-2 {
  border-top: 1px solid #1ab0c3 !important; }

.border-bottom-info.border-bottom-darken-2 {
  border-bottom: 1px solid #1ab0c3 !important; }

.border-left-info.border-left-darken-2 {
  border-left: 1px solid #1ab0c3 !important; }

.border-right-info.border-right-darken-2 {
  border-right: 1px solid #1ab0c3 !important; }

.overlay-info.overlay-darken-2 {
  background: #1ab0c3;
  /* The Fallback */
  background: rgba(26, 176, 195, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #1ab0c3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1ab0c3; }

.info.darken-3 {
  color: #179bad !important; }

.bg-info.bg-darken-3 {
  background-color: #179bad !important; }

.btn-info.btn-darken-3 {
  border-color: #1ab0c3 !important;
  background-color: #179bad !important; }
  .btn-info.btn-darken-3:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-darken-3:focus, .btn-info.btn-darken-3:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-darken-3 {
  border-color: #179bad !important;
  color: #179bad !important; }
  .btn-outline-info.btn-outline-darken-3:hover {
    background-color: #179bad !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #179bad !important; }

.border-info.border-darken-3 {
  border: 1px solid #179bad !important; }

.border-top-info.border-top-darken-3 {
  border-top: 1px solid #179bad !important; }

.border-bottom-info.border-bottom-darken-3 {
  border-bottom: 1px solid #179bad !important; }

.border-left-info.border-left-darken-3 {
  border-left: 1px solid #179bad !important; }

.border-right-info.border-right-darken-3 {
  border-right: 1px solid #179bad !important; }

.overlay-info.overlay-darken-3 {
  background: #179bad;
  /* The Fallback */
  background: rgba(23, 155, 173, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #179bad; }

.edit-kanban-item select option.bg-color_name {
  background-color: #179bad; }

.info.darken-4 {
  color: #148796 !important; }

.bg-info.bg-darken-4 {
  background-color: #148796 !important; }

.btn-info.btn-darken-4 {
  border-color: #1ab0c3 !important;
  background-color: #148796 !important; }
  .btn-info.btn-darken-4:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-darken-4:focus, .btn-info.btn-darken-4:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-darken-4 {
  border-color: #148796 !important;
  color: #148796 !important; }
  .btn-outline-info.btn-outline-darken-4:hover {
    background-color: #148796 !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #148796 !important; }

.border-info.border-darken-4 {
  border: 1px solid #148796 !important; }

.border-top-info.border-top-darken-4 {
  border-top: 1px solid #148796 !important; }

.border-bottom-info.border-bottom-darken-4 {
  border-bottom: 1px solid #148796 !important; }

.border-left-info.border-left-darken-4 {
  border-left: 1px solid #148796 !important; }

.border-right-info.border-right-darken-4 {
  border-right: 1px solid #148796 !important; }

.overlay-info.overlay-darken-4 {
  background: #148796;
  /* The Fallback */
  background: rgba(20, 135, 150, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #148796; }

.edit-kanban-item select option.bg-color_name {
  background-color: #148796; }

.info.accent-1 {
  color: #FEFFFF !important; }

.bg-info.bg-accent-1 {
  background-color: #FEFFFF !important; }

.btn-info.btn-accent-1 {
  border-color: #1ab0c3 !important;
  background-color: #FEFFFF !important; }
  .btn-info.btn-accent-1:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-accent-1:focus, .btn-info.btn-accent-1:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-accent-1 {
  border-color: #FEFFFF !important;
  color: #FEFFFF !important; }
  .btn-outline-info.btn-outline-accent-1:hover {
    background-color: #FEFFFF !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FEFFFF !important; }

.border-info.border-accent-1 {
  border: 1px solid #FEFFFF !important; }

.border-top-info.border-top-accent-1 {
  border-top: 1px solid #FEFFFF !important; }

.border-bottom-info.border-bottom-accent-1 {
  border-bottom: 1px solid #FEFFFF !important; }

.border-left-info.border-left-accent-1 {
  border-left: 1px solid #FEFFFF !important; }

.border-right-info.border-right-accent-1 {
  border-right: 1px solid #FEFFFF !important; }

.overlay-info.overlay-accent-1 {
  background: #FEFFFF;
  /* The Fallback */
  background: rgba(254, 255, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #FEFFFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FEFFFF; }

.info.accent-2 {
  color: #CBF5FF !important; }

.bg-info.bg-accent-2 {
  background-color: #CBF5FF !important; }

.btn-info.btn-accent-2 {
  border-color: #1ab0c3 !important;
  background-color: #CBF5FF !important; }
  .btn-info.btn-accent-2:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-accent-2:focus, .btn-info.btn-accent-2:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-accent-2 {
  border-color: #CBF5FF !important;
  color: #CBF5FF !important; }
  .btn-outline-info.btn-outline-accent-2:hover {
    background-color: #CBF5FF !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CBF5FF !important; }

.border-info.border-accent-2 {
  border: 1px solid #CBF5FF !important; }

.border-top-info.border-top-accent-2 {
  border-top: 1px solid #CBF5FF !important; }

.border-bottom-info.border-bottom-accent-2 {
  border-bottom: 1px solid #CBF5FF !important; }

.border-left-info.border-left-accent-2 {
  border-left: 1px solid #CBF5FF !important; }

.border-right-info.border-right-accent-2 {
  border-right: 1px solid #CBF5FF !important; }

.overlay-info.overlay-accent-2 {
  background: #CBF5FF;
  /* The Fallback */
  background: rgba(203, 245, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #CBF5FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #CBF5FF; }

.info.accent-3 {
  color: #98ECFF !important; }

.bg-info.bg-accent-3 {
  background-color: #98ECFF !important; }

.btn-info.btn-accent-3 {
  border-color: #1ab0c3 !important;
  background-color: #98ECFF !important; }
  .btn-info.btn-accent-3:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-accent-3:focus, .btn-info.btn-accent-3:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-accent-3 {
  border-color: #98ECFF !important;
  color: #98ECFF !important; }
  .btn-outline-info.btn-outline-accent-3:hover {
    background-color: #98ECFF !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #98ECFF !important; }

.border-info.border-accent-3 {
  border: 1px solid #98ECFF !important; }

.border-top-info.border-top-accent-3 {
  border-top: 1px solid #98ECFF !important; }

.border-bottom-info.border-bottom-accent-3 {
  border-bottom: 1px solid #98ECFF !important; }

.border-left-info.border-left-accent-3 {
  border-left: 1px solid #98ECFF !important; }

.border-right-info.border-right-accent-3 {
  border-right: 1px solid #98ECFF !important; }

.overlay-info.overlay-accent-3 {
  background: #98ECFF;
  /* The Fallback */
  background: rgba(152, 236, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #98ECFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #98ECFF; }

.info.accent-4 {
  color: #7FE7FF !important; }

.bg-info.bg-accent-4 {
  background-color: #7FE7FF !important; }

.btn-info.btn-accent-4 {
  border-color: #1ab0c3 !important;
  background-color: #7FE7FF !important; }
  .btn-info.btn-accent-4:hover {
    border-color: #1ab0c3 !important;
    background-color: #179bad !important; }
  .btn-info.btn-accent-4:focus, .btn-info.btn-accent-4:active {
    border-color: #179bad !important;
    background-color: #148796 !important; }

.btn-outline-info.btn-outline-accent-4 {
  border-color: #7FE7FF !important;
  color: #7FE7FF !important; }
  .btn-outline-info.btn-outline-accent-4:hover {
    background-color: #7FE7FF !important; }

input:focus ~ .bg-info {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7FE7FF !important; }

.border-info.border-accent-4 {
  border: 1px solid #7FE7FF !important; }

.border-top-info.border-top-accent-4 {
  border-top: 1px solid #7FE7FF !important; }

.border-bottom-info.border-bottom-accent-4 {
  border-bottom: 1px solid #7FE7FF !important; }

.border-left-info.border-left-accent-4 {
  border-left: 1px solid #7FE7FF !important; }

.border-right-info.border-right-accent-4 {
  border-right: 1px solid #7FE7FF !important; }

.overlay-info.overlay-accent-4 {
  background: #7FE7FF;
  /* The Fallback */
  background: rgba(127, 231, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=info]:before {
  background-color: #7FE7FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #7FE7FF; }

.warning.lighten-5 {
  color: #fffdfd !important; }

.bg-warning.bg-lighten-5 {
  background-color: #fffdfd !important; }

.btn-warning.btn-lighten-5 {
  border-color: #ff864a !important;
  background-color: #fffdfd !important; }
  .btn-warning.btn-lighten-5:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-lighten-5:focus, .btn-warning.btn-lighten-5:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-lighten-5 {
  border-color: #fffdfd !important;
  color: #fffdfd !important; }
  .btn-outline-warning.btn-outline-lighten-5:hover {
    background-color: #fffdfd !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fffdfd !important; }

.border-warning.border-lighten-5 {
  border: 1px solid #fffdfd !important; }

.border-top-warning.border-top-lighten-5 {
  border-top: 1px solid #fffdfd !important; }

.border-bottom-warning.border-bottom-lighten-5 {
  border-bottom: 1px solid #fffdfd !important; }

.border-left-warning.border-left-lighten-5 {
  border-left: 1px solid #fffdfd !important; }

.border-right-warning.border-right-lighten-5 {
  border-right: 1px solid #fffdfd !important; }

.overlay-warning.overlay-lighten-5 {
  background: #fffdfd;
  /* The Fallback */
  background: rgba(255, 253, 253, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #fffdfd; }

.edit-kanban-item select option.bg-color_name {
  background-color: #fffdfd; }

.warning.lighten-4 {
  color: #ffece3 !important; }

.bg-warning.bg-lighten-4 {
  background-color: #ffece3 !important; }

.btn-warning.btn-lighten-4 {
  border-color: #ff864a !important;
  background-color: #ffece3 !important; }
  .btn-warning.btn-lighten-4:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-lighten-4:focus, .btn-warning.btn-lighten-4:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-lighten-4 {
  border-color: #ffece3 !important;
  color: #ffece3 !important; }
  .btn-outline-warning.btn-outline-lighten-4:hover {
    background-color: #ffece3 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffece3 !important; }

.border-warning.border-lighten-4 {
  border: 1px solid #ffece3 !important; }

.border-top-warning.border-top-lighten-4 {
  border-top: 1px solid #ffece3 !important; }

.border-bottom-warning.border-bottom-lighten-4 {
  border-bottom: 1px solid #ffece3 !important; }

.border-left-warning.border-left-lighten-4 {
  border-left: 1px solid #ffece3 !important; }

.border-right-warning.border-right-lighten-4 {
  border-right: 1px solid #ffece3 !important; }

.overlay-warning.overlay-lighten-4 {
  background: #ffece3;
  /* The Fallback */
  background: rgba(255, 236, 227, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ffece3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffece3; }

.warning.lighten-3 {
  color: #ffdbca !important; }

.bg-warning.bg-lighten-3 {
  background-color: #ffdbca !important; }

.btn-warning.btn-lighten-3 {
  border-color: #ff864a !important;
  background-color: #ffdbca !important; }
  .btn-warning.btn-lighten-3:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-lighten-3:focus, .btn-warning.btn-lighten-3:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-lighten-3 {
  border-color: #ffdbca !important;
  color: #ffdbca !important; }
  .btn-outline-warning.btn-outline-lighten-3:hover {
    background-color: #ffdbca !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffdbca !important; }

.border-warning.border-lighten-3 {
  border: 1px solid #ffdbca !important; }

.border-top-warning.border-top-lighten-3 {
  border-top: 1px solid #ffdbca !important; }

.border-bottom-warning.border-bottom-lighten-3 {
  border-bottom: 1px solid #ffdbca !important; }

.border-left-warning.border-left-lighten-3 {
  border-left: 1px solid #ffdbca !important; }

.border-right-warning.border-right-lighten-3 {
  border-right: 1px solid #ffdbca !important; }

.overlay-warning.overlay-lighten-3 {
  background: #ffdbca;
  /* The Fallback */
  background: rgba(255, 219, 202, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ffdbca; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffdbca; }

.warning.lighten-2 {
  color: #ffcab0 !important; }

.bg-warning.bg-lighten-2 {
  background-color: #ffcab0 !important; }

.btn-warning.btn-lighten-2 {
  border-color: #ff864a !important;
  background-color: #ffcab0 !important; }
  .btn-warning.btn-lighten-2:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-lighten-2:focus, .btn-warning.btn-lighten-2:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-lighten-2 {
  border-color: #ffcab0 !important;
  color: #ffcab0 !important; }
  .btn-outline-warning.btn-outline-lighten-2:hover {
    background-color: #ffcab0 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffcab0 !important; }

.border-warning.border-lighten-2 {
  border: 1px solid #ffcab0 !important; }

.border-top-warning.border-top-lighten-2 {
  border-top: 1px solid #ffcab0 !important; }

.border-bottom-warning.border-bottom-lighten-2 {
  border-bottom: 1px solid #ffcab0 !important; }

.border-left-warning.border-left-lighten-2 {
  border-left: 1px solid #ffcab0 !important; }

.border-right-warning.border-right-lighten-2 {
  border-right: 1px solid #ffcab0 !important; }

.overlay-warning.overlay-lighten-2 {
  background: #ffcab0;
  /* The Fallback */
  background: rgba(255, 202, 176, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ffcab0; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffcab0; }

.warning.lighten-1 {
  color: #ffb997 !important; }

.bg-warning.bg-lighten-1 {
  background-color: #ffb997 !important; }

.btn-warning.btn-lighten-1 {
  border-color: #ff864a !important;
  background-color: #ffb997 !important; }
  .btn-warning.btn-lighten-1:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-lighten-1:focus, .btn-warning.btn-lighten-1:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-lighten-1 {
  border-color: #ffb997 !important;
  color: #ffb997 !important; }
  .btn-outline-warning.btn-outline-lighten-1:hover {
    background-color: #ffb997 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffb997 !important; }

.border-warning.border-lighten-1 {
  border: 1px solid #ffb997 !important; }

.border-top-warning.border-top-lighten-1 {
  border-top: 1px solid #ffb997 !important; }

.border-bottom-warning.border-bottom-lighten-1 {
  border-bottom: 1px solid #ffb997 !important; }

.border-left-warning.border-left-lighten-1 {
  border-left: 1px solid #ffb997 !important; }

.border-right-warning.border-right-lighten-1 {
  border-right: 1px solid #ffb997 !important; }

.overlay-warning.overlay-lighten-1 {
  background: #ffb997;
  /* The Fallback */
  background: rgba(255, 185, 151, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ffb997; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffb997; }

.warning {
  color: #ffa87d !important; }

.bg-warning {
  background-color: #ffa87d !important; }
  .bg-warning .card-header,
  .bg-warning .card-footer {
    background-color: transparent; }

.alert-warning {
  border-color: #ffd8c4 !important;
  background-color: #ffd8c4 !important;
  color: #ca4300 !important; }
  .alert-warning .alert-link {
    color: #a13500 !important; }

.bullet.bullet-warning {
  background-color: #ffa87d; }

.bg-light-warning {
  background-color: rgba(255, 168, 125, 0.15); }

.border-warning {
  border-color: #ffa87d; }

.bg-warning.badge-glow,
.border-warning.badge-glow {
  box-shadow: 0px 0px 10px #ffa87d; }

.overlay-warning {
  background: #ffa87d;
  /* The Fallback */
  background: rgba(255, 168, 125, 0.8); }

/* .card-outline-warning{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-warning {
  border-color: !important;
  background-color: #ffa87d !important;
  color: #FFFFFF; }
  .btn-warning:hover {
    border-color: #ff9764 !important;
    background-color: #ffb997 !important;
    color: #FFF !important; }
  .btn-warning:focus, .btn-warning:active {
    border-color: #ff864a !important;
    background-color: #ff7531 !important;
    color: #FFF !important; }

.btn-outline-warning {
  border-color: #ffa87d;
  background-color: transparent;
  color: #ffa87d; }
  .btn-outline-warning:hover {
    background-color: #ffa87d;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-warning:before {
  background-color: #ffa87d; }

input[type="checkbox"].bg-warning + .custom-control-label:before, input[type="radio"].bg-warning + .custom-control-label:before {
  background-color: #ffa87d !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffa87d !important; }

.border-warning {
  border: 1px solid #ffa87d !important; }

.border-top-warning {
  border-top: 1px solid #ffa87d; }

.border-bottom-warning {
  border-bottom: 1px solid #ffa87d; }

.border-left-warning {
  border-left: 1px solid #ffa87d; }

.border-right-warning {
  border-right: 1px solid #ffa87d; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ffa87d; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffa87d; }

.warning.darken-1 {
  color: #ff9764 !important; }

.bg-warning.bg-darken-1 {
  background-color: #ff9764 !important; }

.btn-warning.btn-darken-1 {
  border-color: #ff864a !important;
  background-color: #ff9764 !important; }
  .btn-warning.btn-darken-1:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-darken-1:focus, .btn-warning.btn-darken-1:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-darken-1 {
  border-color: #ff9764 !important;
  color: #ff9764 !important; }
  .btn-outline-warning.btn-outline-darken-1:hover {
    background-color: #ff9764 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff9764 !important; }

.border-warning.border-darken-1 {
  border: 1px solid #ff9764 !important; }

.border-top-warning.border-top-darken-1 {
  border-top: 1px solid #ff9764 !important; }

.border-bottom-warning.border-bottom-darken-1 {
  border-bottom: 1px solid #ff9764 !important; }

.border-left-warning.border-left-darken-1 {
  border-left: 1px solid #ff9764 !important; }

.border-right-warning.border-right-darken-1 {
  border-right: 1px solid #ff9764 !important; }

.overlay-warning.overlay-darken-1 {
  background: #ff9764;
  /* The Fallback */
  background: rgba(255, 151, 100, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ff9764; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff9764; }

.warning.darken-2 {
  color: #ff864a !important; }

.bg-warning.bg-darken-2 {
  background-color: #ff864a !important; }

.btn-warning.btn-darken-2 {
  border-color: #ff864a !important;
  background-color: #ff864a !important; }
  .btn-warning.btn-darken-2:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-darken-2:focus, .btn-warning.btn-darken-2:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-darken-2 {
  border-color: #ff864a !important;
  color: #ff864a !important; }
  .btn-outline-warning.btn-outline-darken-2:hover {
    background-color: #ff864a !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff864a !important; }

.border-warning.border-darken-2 {
  border: 1px solid #ff864a !important; }

.border-top-warning.border-top-darken-2 {
  border-top: 1px solid #ff864a !important; }

.border-bottom-warning.border-bottom-darken-2 {
  border-bottom: 1px solid #ff864a !important; }

.border-left-warning.border-left-darken-2 {
  border-left: 1px solid #ff864a !important; }

.border-right-warning.border-right-darken-2 {
  border-right: 1px solid #ff864a !important; }

.overlay-warning.overlay-darken-2 {
  background: #ff864a;
  /* The Fallback */
  background: rgba(255, 134, 74, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ff864a; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff864a; }

.warning.darken-3 {
  color: #ff7531 !important; }

.bg-warning.bg-darken-3 {
  background-color: #ff7531 !important; }

.btn-warning.btn-darken-3 {
  border-color: #ff864a !important;
  background-color: #ff7531 !important; }
  .btn-warning.btn-darken-3:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-darken-3:focus, .btn-warning.btn-darken-3:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-darken-3 {
  border-color: #ff7531 !important;
  color: #ff7531 !important; }
  .btn-outline-warning.btn-outline-darken-3:hover {
    background-color: #ff7531 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff7531 !important; }

.border-warning.border-darken-3 {
  border: 1px solid #ff7531 !important; }

.border-top-warning.border-top-darken-3 {
  border-top: 1px solid #ff7531 !important; }

.border-bottom-warning.border-bottom-darken-3 {
  border-bottom: 1px solid #ff7531 !important; }

.border-left-warning.border-left-darken-3 {
  border-left: 1px solid #ff7531 !important; }

.border-right-warning.border-right-darken-3 {
  border-right: 1px solid #ff7531 !important; }

.overlay-warning.overlay-darken-3 {
  background: #ff7531;
  /* The Fallback */
  background: rgba(255, 117, 49, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ff7531; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff7531; }

.warning.darken-4 {
  color: #ff6417 !important; }

.bg-warning.bg-darken-4 {
  background-color: #ff6417 !important; }

.btn-warning.btn-darken-4 {
  border-color: #ff864a !important;
  background-color: #ff6417 !important; }
  .btn-warning.btn-darken-4:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-darken-4:focus, .btn-warning.btn-darken-4:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-darken-4 {
  border-color: #ff6417 !important;
  color: #ff6417 !important; }
  .btn-outline-warning.btn-outline-darken-4:hover {
    background-color: #ff6417 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff6417 !important; }

.border-warning.border-darken-4 {
  border: 1px solid #ff6417 !important; }

.border-top-warning.border-top-darken-4 {
  border-top: 1px solid #ff6417 !important; }

.border-bottom-warning.border-bottom-darken-4 {
  border-bottom: 1px solid #ff6417 !important; }

.border-left-warning.border-left-darken-4 {
  border-left: 1px solid #ff6417 !important; }

.border-right-warning.border-right-darken-4 {
  border-right: 1px solid #ff6417 !important; }

.overlay-warning.overlay-darken-4 {
  background: #ff6417;
  /* The Fallback */
  background: rgba(255, 100, 23, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #ff6417; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff6417; }

.warning.accent-1 {
  color: #FFF5EF !important; }

.bg-warning.bg-accent-1 {
  background-color: #FFF5EF !important; }

.btn-warning.btn-accent-1 {
  border-color: #ff864a !important;
  background-color: #FFF5EF !important; }
  .btn-warning.btn-accent-1:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-accent-1:focus, .btn-warning.btn-accent-1:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-accent-1 {
  border-color: #FFF5EF !important;
  color: #FFF5EF !important; }
  .btn-outline-warning.btn-outline-accent-1:hover {
    background-color: #FFF5EF !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF5EF !important; }

.border-warning.border-accent-1 {
  border: 1px solid #FFF5EF !important; }

.border-top-warning.border-top-accent-1 {
  border-top: 1px solid #FFF5EF !important; }

.border-bottom-warning.border-bottom-accent-1 {
  border-bottom: 1px solid #FFF5EF !important; }

.border-left-warning.border-left-accent-1 {
  border-left: 1px solid #FFF5EF !important; }

.border-right-warning.border-right-accent-1 {
  border-right: 1px solid #FFF5EF !important; }

.overlay-warning.overlay-accent-1 {
  background: #FFF5EF;
  /* The Fallback */
  background: rgba(255, 245, 239, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #FFF5EF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF5EF; }

.warning.accent-2 {
  color: #FFE5D8 !important; }

.bg-warning.bg-accent-2 {
  background-color: #FFE5D8 !important; }

.btn-warning.btn-accent-2 {
  border-color: #ff864a !important;
  background-color: #FFE5D8 !important; }
  .btn-warning.btn-accent-2:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-accent-2:focus, .btn-warning.btn-accent-2:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-accent-2 {
  border-color: #FFE5D8 !important;
  color: #FFE5D8 !important; }
  .btn-outline-warning.btn-outline-accent-2:hover {
    background-color: #FFE5D8 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE5D8 !important; }

.border-warning.border-accent-2 {
  border: 1px solid #FFE5D8 !important; }

.border-top-warning.border-top-accent-2 {
  border-top: 1px solid #FFE5D8 !important; }

.border-bottom-warning.border-bottom-accent-2 {
  border-bottom: 1px solid #FFE5D8 !important; }

.border-left-warning.border-left-accent-2 {
  border-left: 1px solid #FFE5D8 !important; }

.border-right-warning.border-right-accent-2 {
  border-right: 1px solid #FFE5D8 !important; }

.overlay-warning.overlay-accent-2 {
  background: #FFE5D8;
  /* The Fallback */
  background: rgba(255, 229, 216, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #FFE5D8; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFE5D8; }

.warning.accent-3 {
  color: #FFF6F3 !important; }

.bg-warning.bg-accent-3 {
  background-color: #FFF6F3 !important; }

.btn-warning.btn-accent-3 {
  border-color: #ff864a !important;
  background-color: #FFF6F3 !important; }
  .btn-warning.btn-accent-3:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-accent-3:focus, .btn-warning.btn-accent-3:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-accent-3 {
  border-color: #FFF6F3 !important;
  color: #FFF6F3 !important; }
  .btn-outline-warning.btn-outline-accent-3:hover {
    background-color: #FFF6F3 !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF6F3 !important; }

.border-warning.border-accent-3 {
  border: 1px solid #FFF6F3 !important; }

.border-top-warning.border-top-accent-3 {
  border-top: 1px solid #FFF6F3 !important; }

.border-bottom-warning.border-bottom-accent-3 {
  border-bottom: 1px solid #FFF6F3 !important; }

.border-left-warning.border-left-accent-3 {
  border-left: 1px solid #FFF6F3 !important; }

.border-right-warning.border-right-accent-3 {
  border-right: 1px solid #FFF6F3 !important; }

.overlay-warning.overlay-accent-3 {
  background: #FFF6F3;
  /* The Fallback */
  background: rgba(255, 246, 243, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #FFF6F3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF6F3; }

.warning.accent-4 {
  color: #FFE3DA !important; }

.bg-warning.bg-accent-4 {
  background-color: #FFE3DA !important; }

.btn-warning.btn-accent-4 {
  border-color: #ff864a !important;
  background-color: #FFE3DA !important; }
  .btn-warning.btn-accent-4:hover {
    border-color: #ff864a !important;
    background-color: #ff7531 !important; }
  .btn-warning.btn-accent-4:focus, .btn-warning.btn-accent-4:active {
    border-color: #ff7531 !important;
    background-color: #ff6417 !important; }

.btn-outline-warning.btn-outline-accent-4 {
  border-color: #FFE3DA !important;
  color: #FFE3DA !important; }
  .btn-outline-warning.btn-outline-accent-4:hover {
    background-color: #FFE3DA !important; }

input:focus ~ .bg-warning {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE3DA !important; }

.border-warning.border-accent-4 {
  border: 1px solid #FFE3DA !important; }

.border-top-warning.border-top-accent-4 {
  border-top: 1px solid #FFE3DA !important; }

.border-bottom-warning.border-bottom-accent-4 {
  border-bottom: 1px solid #FFE3DA !important; }

.border-left-warning.border-left-accent-4 {
  border-left: 1px solid #FFE3DA !important; }

.border-right-warning.border-right-accent-4 {
  border-right: 1px solid #FFE3DA !important; }

.overlay-warning.overlay-accent-4 {
  background: #FFE3DA;
  /* The Fallback */
  background: rgba(255, 227, 218, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=warning]:before {
  background-color: #FFE3DA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFE3DA; }

.danger.lighten-5 {
  color: #fff5f6 !important; }

.bg-danger.bg-lighten-5 {
  background-color: #fff5f6 !important; }

.btn-danger.btn-lighten-5 {
  border-color: #ff425c !important;
  background-color: #fff5f6 !important; }
  .btn-danger.btn-lighten-5:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-lighten-5:focus, .btn-danger.btn-lighten-5:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-lighten-5 {
  border-color: #fff5f6 !important;
  color: #fff5f6 !important; }
  .btn-outline-danger.btn-outline-lighten-5:hover {
    background-color: #fff5f6 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #fff5f6 !important; }

.border-danger.border-lighten-5 {
  border: 1px solid #fff5f6 !important; }

.border-top-danger.border-top-lighten-5 {
  border-top: 1px solid #fff5f6 !important; }

.border-bottom-danger.border-bottom-lighten-5 {
  border-bottom: 1px solid #fff5f6 !important; }

.border-left-danger.border-left-lighten-5 {
  border-left: 1px solid #fff5f6 !important; }

.border-right-danger.border-right-lighten-5 {
  border-right: 1px solid #fff5f6 !important; }

.overlay-danger.overlay-lighten-5 {
  background: #fff5f6;
  /* The Fallback */
  background: rgba(255, 245, 246, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #fff5f6; }

.edit-kanban-item select option.bg-color_name {
  background-color: #fff5f6; }

.danger.lighten-4 {
  color: #ffdbe0 !important; }

.bg-danger.bg-lighten-4 {
  background-color: #ffdbe0 !important; }

.btn-danger.btn-lighten-4 {
  border-color: #ff425c !important;
  background-color: #ffdbe0 !important; }
  .btn-danger.btn-lighten-4:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-lighten-4:focus, .btn-danger.btn-lighten-4:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-lighten-4 {
  border-color: #ffdbe0 !important;
  color: #ffdbe0 !important; }
  .btn-outline-danger.btn-outline-lighten-4:hover {
    background-color: #ffdbe0 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffdbe0 !important; }

.border-danger.border-lighten-4 {
  border: 1px solid #ffdbe0 !important; }

.border-top-danger.border-top-lighten-4 {
  border-top: 1px solid #ffdbe0 !important; }

.border-bottom-danger.border-bottom-lighten-4 {
  border-bottom: 1px solid #ffdbe0 !important; }

.border-left-danger.border-left-lighten-4 {
  border-left: 1px solid #ffdbe0 !important; }

.border-right-danger.border-right-lighten-4 {
  border-right: 1px solid #ffdbe0 !important; }

.overlay-danger.overlay-lighten-4 {
  background: #ffdbe0;
  /* The Fallback */
  background: rgba(255, 219, 224, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ffdbe0; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffdbe0; }

.danger.lighten-3 {
  color: #ffc2ca !important; }

.bg-danger.bg-lighten-3 {
  background-color: #ffc2ca !important; }

.btn-danger.btn-lighten-3 {
  border-color: #ff425c !important;
  background-color: #ffc2ca !important; }
  .btn-danger.btn-lighten-3:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-lighten-3:focus, .btn-danger.btn-lighten-3:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-lighten-3 {
  border-color: #ffc2ca !important;
  color: #ffc2ca !important; }
  .btn-outline-danger.btn-outline-lighten-3:hover {
    background-color: #ffc2ca !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffc2ca !important; }

.border-danger.border-lighten-3 {
  border: 1px solid #ffc2ca !important; }

.border-top-danger.border-top-lighten-3 {
  border-top: 1px solid #ffc2ca !important; }

.border-bottom-danger.border-bottom-lighten-3 {
  border-bottom: 1px solid #ffc2ca !important; }

.border-left-danger.border-left-lighten-3 {
  border-left: 1px solid #ffc2ca !important; }

.border-right-danger.border-right-lighten-3 {
  border-right: 1px solid #ffc2ca !important; }

.overlay-danger.overlay-lighten-3 {
  background: #ffc2ca;
  /* The Fallback */
  background: rgba(255, 194, 202, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ffc2ca; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffc2ca; }

.danger.lighten-2 {
  color: #ffa8b4 !important; }

.bg-danger.bg-lighten-2 {
  background-color: #ffa8b4 !important; }

.btn-danger.btn-lighten-2 {
  border-color: #ff425c !important;
  background-color: #ffa8b4 !important; }
  .btn-danger.btn-lighten-2:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-lighten-2:focus, .btn-danger.btn-lighten-2:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-lighten-2 {
  border-color: #ffa8b4 !important;
  color: #ffa8b4 !important; }
  .btn-outline-danger.btn-outline-lighten-2:hover {
    background-color: #ffa8b4 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ffa8b4 !important; }

.border-danger.border-lighten-2 {
  border: 1px solid #ffa8b4 !important; }

.border-top-danger.border-top-lighten-2 {
  border-top: 1px solid #ffa8b4 !important; }

.border-bottom-danger.border-bottom-lighten-2 {
  border-bottom: 1px solid #ffa8b4 !important; }

.border-left-danger.border-left-lighten-2 {
  border-left: 1px solid #ffa8b4 !important; }

.border-right-danger.border-right-lighten-2 {
  border-right: 1px solid #ffa8b4 !important; }

.overlay-danger.overlay-lighten-2 {
  background: #ffa8b4;
  /* The Fallback */
  background: rgba(255, 168, 180, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ffa8b4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ffa8b4; }

.danger.lighten-1 {
  color: #ff8f9e !important; }

.bg-danger.bg-lighten-1 {
  background-color: #ff8f9e !important; }

.btn-danger.btn-lighten-1 {
  border-color: #ff425c !important;
  background-color: #ff8f9e !important; }
  .btn-danger.btn-lighten-1:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-lighten-1:focus, .btn-danger.btn-lighten-1:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-lighten-1 {
  border-color: #ff8f9e !important;
  color: #ff8f9e !important; }
  .btn-outline-danger.btn-outline-lighten-1:hover {
    background-color: #ff8f9e !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff8f9e !important; }

.border-danger.border-lighten-1 {
  border: 1px solid #ff8f9e !important; }

.border-top-danger.border-top-lighten-1 {
  border-top: 1px solid #ff8f9e !important; }

.border-bottom-danger.border-bottom-lighten-1 {
  border-bottom: 1px solid #ff8f9e !important; }

.border-left-danger.border-left-lighten-1 {
  border-left: 1px solid #ff8f9e !important; }

.border-right-danger.border-right-lighten-1 {
  border-right: 1px solid #ff8f9e !important; }

.overlay-danger.overlay-lighten-1 {
  background: #ff8f9e;
  /* The Fallback */
  background: rgba(255, 143, 158, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff8f9e; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff8f9e; }

.danger {
  color: #ff7588 !important; }

.bg-danger {
  background-color: #ff7588 !important; }
  .bg-danger .card-header,
  .bg-danger .card-footer {
    background-color: transparent; }

.alert-danger {
  border-color: #ffbcc6 !important;
  background-color: #ffbcc6 !important;
  color: #c2001b !important; }
  .alert-danger .alert-link {
    color: #990015 !important; }

.bullet.bullet-danger {
  background-color: #ff7588; }

.bg-light-danger {
  background-color: rgba(255, 117, 136, 0.15); }

.border-danger {
  border-color: #ff7588; }

.bg-danger.badge-glow,
.border-danger.badge-glow {
  box-shadow: 0px 0px 10px #ff7588; }

.overlay-danger {
  background: #ff7588;
  /* The Fallback */
  background: rgba(255, 117, 136, 0.8); }

/* .card-outline-danger{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-danger {
  border-color: !important;
  background-color: #ff7588 !important;
  color: #FFFFFF; }
  .btn-danger:hover {
    border-color: #ff5c72 !important;
    background-color: #ff8f9e !important;
    color: #FFF !important; }
  .btn-danger:focus, .btn-danger:active {
    border-color: #ff425c !important;
    background-color: #ff2946 !important;
    color: #FFF !important; }

.btn-outline-danger {
  border-color: #ff7588;
  background-color: transparent;
  color: #ff7588; }
  .btn-outline-danger:hover {
    background-color: #ff7588;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-danger:before {
  background-color: #ff7588; }

input[type="checkbox"].bg-danger + .custom-control-label:before, input[type="radio"].bg-danger + .custom-control-label:before {
  background-color: #ff7588 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff7588 !important; }

.border-danger {
  border: 1px solid #ff7588 !important; }

.border-top-danger {
  border-top: 1px solid #ff7588; }

.border-bottom-danger {
  border-bottom: 1px solid #ff7588; }

.border-left-danger {
  border-left: 1px solid #ff7588; }

.border-right-danger {
  border-right: 1px solid #ff7588; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff7588; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff7588; }

.danger.darken-1 {
  color: #ff5c72 !important; }

.bg-danger.bg-darken-1 {
  background-color: #ff5c72 !important; }

.btn-danger.btn-darken-1 {
  border-color: #ff425c !important;
  background-color: #ff5c72 !important; }
  .btn-danger.btn-darken-1:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-darken-1:focus, .btn-danger.btn-darken-1:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-darken-1 {
  border-color: #ff5c72 !important;
  color: #ff5c72 !important; }
  .btn-outline-danger.btn-outline-darken-1:hover {
    background-color: #ff5c72 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff5c72 !important; }

.border-danger.border-darken-1 {
  border: 1px solid #ff5c72 !important; }

.border-top-danger.border-top-darken-1 {
  border-top: 1px solid #ff5c72 !important; }

.border-bottom-danger.border-bottom-darken-1 {
  border-bottom: 1px solid #ff5c72 !important; }

.border-left-danger.border-left-darken-1 {
  border-left: 1px solid #ff5c72 !important; }

.border-right-danger.border-right-darken-1 {
  border-right: 1px solid #ff5c72 !important; }

.overlay-danger.overlay-darken-1 {
  background: #ff5c72;
  /* The Fallback */
  background: rgba(255, 92, 114, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff5c72; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff5c72; }

.danger.darken-2 {
  color: #ff425c !important; }

.bg-danger.bg-darken-2 {
  background-color: #ff425c !important; }

.btn-danger.btn-darken-2 {
  border-color: #ff425c !important;
  background-color: #ff425c !important; }
  .btn-danger.btn-darken-2:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-darken-2:focus, .btn-danger.btn-darken-2:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-darken-2 {
  border-color: #ff425c !important;
  color: #ff425c !important; }
  .btn-outline-danger.btn-outline-darken-2:hover {
    background-color: #ff425c !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff425c !important; }

.border-danger.border-darken-2 {
  border: 1px solid #ff425c !important; }

.border-top-danger.border-top-darken-2 {
  border-top: 1px solid #ff425c !important; }

.border-bottom-danger.border-bottom-darken-2 {
  border-bottom: 1px solid #ff425c !important; }

.border-left-danger.border-left-darken-2 {
  border-left: 1px solid #ff425c !important; }

.border-right-danger.border-right-darken-2 {
  border-right: 1px solid #ff425c !important; }

.overlay-danger.overlay-darken-2 {
  background: #ff425c;
  /* The Fallback */
  background: rgba(255, 66, 92, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff425c; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff425c; }

.danger.darken-3 {
  color: #ff2946 !important; }

.bg-danger.bg-darken-3 {
  background-color: #ff2946 !important; }

.btn-danger.btn-darken-3 {
  border-color: #ff425c !important;
  background-color: #ff2946 !important; }
  .btn-danger.btn-darken-3:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-darken-3:focus, .btn-danger.btn-darken-3:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-darken-3 {
  border-color: #ff2946 !important;
  color: #ff2946 !important; }
  .btn-outline-danger.btn-outline-darken-3:hover {
    background-color: #ff2946 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff2946 !important; }

.border-danger.border-darken-3 {
  border: 1px solid #ff2946 !important; }

.border-top-danger.border-top-darken-3 {
  border-top: 1px solid #ff2946 !important; }

.border-bottom-danger.border-bottom-darken-3 {
  border-bottom: 1px solid #ff2946 !important; }

.border-left-danger.border-left-darken-3 {
  border-left: 1px solid #ff2946 !important; }

.border-right-danger.border-right-darken-3 {
  border-right: 1px solid #ff2946 !important; }

.overlay-danger.overlay-darken-3 {
  background: #ff2946;
  /* The Fallback */
  background: rgba(255, 41, 70, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff2946; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff2946; }

.danger.darken-4 {
  color: #ff0f30 !important; }

.bg-danger.bg-darken-4 {
  background-color: #ff0f30 !important; }

.btn-danger.btn-darken-4 {
  border-color: #ff425c !important;
  background-color: #ff0f30 !important; }
  .btn-danger.btn-darken-4:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-darken-4:focus, .btn-danger.btn-darken-4:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-darken-4 {
  border-color: #ff0f30 !important;
  color: #ff0f30 !important; }
  .btn-outline-danger.btn-outline-darken-4:hover {
    background-color: #ff0f30 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ff0f30 !important; }

.border-danger.border-darken-4 {
  border: 1px solid #ff0f30 !important; }

.border-top-danger.border-top-darken-4 {
  border-top: 1px solid #ff0f30 !important; }

.border-bottom-danger.border-bottom-darken-4 {
  border-bottom: 1px solid #ff0f30 !important; }

.border-left-danger.border-left-darken-4 {
  border-left: 1px solid #ff0f30 !important; }

.border-right-danger.border-right-darken-4 {
  border-right: 1px solid #ff0f30 !important; }

.overlay-danger.overlay-darken-4 {
  background: #ff0f30;
  /* The Fallback */
  background: rgba(255, 15, 48, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #ff0f30; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ff0f30; }

.danger.accent-1 {
  color: #FFEEF1 !important; }

.bg-danger.bg-accent-1 {
  background-color: #FFEEF1 !important; }

.btn-danger.btn-accent-1 {
  border-color: #ff425c !important;
  background-color: #FFEEF1 !important; }
  .btn-danger.btn-accent-1:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-accent-1:focus, .btn-danger.btn-accent-1:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-accent-1 {
  border-color: #FFEEF1 !important;
  color: #FFEEF1 !important; }
  .btn-outline-danger.btn-outline-accent-1:hover {
    background-color: #FFEEF1 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEEF1 !important; }

.border-danger.border-accent-1 {
  border: 1px solid #FFEEF1 !important; }

.border-top-danger.border-top-accent-1 {
  border-top: 1px solid #FFEEF1 !important; }

.border-bottom-danger.border-bottom-accent-1 {
  border-bottom: 1px solid #FFEEF1 !important; }

.border-left-danger.border-left-accent-1 {
  border-left: 1px solid #FFEEF1 !important; }

.border-right-danger.border-right-accent-1 {
  border-right: 1px solid #FFEEF1 !important; }

.overlay-danger.overlay-accent-1 {
  background: #FFEEF1;
  /* The Fallback */
  background: rgba(255, 238, 241, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #FFEEF1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFEEF1; }

.danger.accent-2 {
  color: #FFD6DB !important; }

.bg-danger.bg-accent-2 {
  background-color: #FFD6DB !important; }

.btn-danger.btn-accent-2 {
  border-color: #ff425c !important;
  background-color: #FFD6DB !important; }
  .btn-danger.btn-accent-2:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-accent-2:focus, .btn-danger.btn-accent-2:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-accent-2 {
  border-color: #FFD6DB !important;
  color: #FFD6DB !important; }
  .btn-outline-danger.btn-outline-accent-2:hover {
    background-color: #FFD6DB !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD6DB !important; }

.border-danger.border-accent-2 {
  border: 1px solid #FFD6DB !important; }

.border-top-danger.border-top-accent-2 {
  border-top: 1px solid #FFD6DB !important; }

.border-bottom-danger.border-bottom-accent-2 {
  border-bottom: 1px solid #FFD6DB !important; }

.border-left-danger.border-left-accent-2 {
  border-left: 1px solid #FFD6DB !important; }

.border-right-danger.border-right-accent-2 {
  border-right: 1px solid #FFD6DB !important; }

.overlay-danger.overlay-accent-2 {
  background: #FFD6DB;
  /* The Fallback */
  background: rgba(255, 214, 219, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #FFD6DB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFD6DB; }

.danger.accent-3 {
  color: #FFECEE !important; }

.bg-danger.bg-accent-3 {
  background-color: #FFECEE !important; }

.btn-danger.btn-accent-3 {
  border-color: #ff425c !important;
  background-color: #FFECEE !important; }
  .btn-danger.btn-accent-3:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-accent-3:focus, .btn-danger.btn-accent-3:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-accent-3 {
  border-color: #FFECEE !important;
  color: #FFECEE !important; }
  .btn-outline-danger.btn-outline-accent-3:hover {
    background-color: #FFECEE !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFECEE !important; }

.border-danger.border-accent-3 {
  border: 1px solid #FFECEE !important; }

.border-top-danger.border-top-accent-3 {
  border-top: 1px solid #FFECEE !important; }

.border-bottom-danger.border-bottom-accent-3 {
  border-bottom: 1px solid #FFECEE !important; }

.border-left-danger.border-left-accent-3 {
  border-left: 1px solid #FFECEE !important; }

.border-right-danger.border-right-accent-3 {
  border-right: 1px solid #FFECEE !important; }

.overlay-danger.overlay-accent-3 {
  background: #FFECEE;
  /* The Fallback */
  background: rgba(255, 236, 238, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #FFECEE; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFECEE; }

.danger.accent-4 {
  color: #FFD3D7 !important; }

.bg-danger.bg-accent-4 {
  background-color: #FFD3D7 !important; }

.btn-danger.btn-accent-4 {
  border-color: #ff425c !important;
  background-color: #FFD3D7 !important; }
  .btn-danger.btn-accent-4:hover {
    border-color: #ff425c !important;
    background-color: #ff2946 !important; }
  .btn-danger.btn-accent-4:focus, .btn-danger.btn-accent-4:active {
    border-color: #ff2946 !important;
    background-color: #ff0f30 !important; }

.btn-outline-danger.btn-outline-accent-4 {
  border-color: #FFD3D7 !important;
  color: #FFD3D7 !important; }
  .btn-outline-danger.btn-outline-accent-4:hover {
    background-color: #FFD3D7 !important; }

input:focus ~ .bg-danger {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD3D7 !important; }

.border-danger.border-accent-4 {
  border: 1px solid #FFD3D7 !important; }

.border-top-danger.border-top-accent-4 {
  border-top: 1px solid #FFD3D7 !important; }

.border-bottom-danger.border-bottom-accent-4 {
  border-bottom: 1px solid #FFD3D7 !important; }

.border-left-danger.border-left-accent-4 {
  border-left: 1px solid #FFD3D7 !important; }

.border-right-danger.border-right-accent-4 {
  border-right: 1px solid #FFD3D7 !important; }

.overlay-danger.overlay-accent-4 {
  background: #FFD3D7;
  /* The Fallback */
  background: rgba(255, 211, 215, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=danger]:before {
  background-color: #FFD3D7; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFD3D7; }

.red.lighten-5 {
  color: #FFEBEE !important; }

.bg-red.bg-lighten-5 {
  background-color: #FFEBEE !important; }

.btn-red.btn-lighten-5 {
  border-color: #D32F2F !important;
  background-color: #FFEBEE !important; }
  .btn-red.btn-lighten-5:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-lighten-5:focus, .btn-red.btn-lighten-5:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-lighten-5 {
  border-color: #FFEBEE !important;
  color: #FFEBEE !important; }
  .btn-outline-red.btn-outline-lighten-5:hover {
    background-color: #FFEBEE !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEBEE !important; }

.border-red.border-lighten-5 {
  border: 1px solid #FFEBEE !important; }

.border-top-red.border-top-lighten-5 {
  border-top: 1px solid #FFEBEE !important; }

.border-bottom-red.border-bottom-lighten-5 {
  border-bottom: 1px solid #FFEBEE !important; }

.border-left-red.border-left-lighten-5 {
  border-left: 1px solid #FFEBEE !important; }

.border-right-red.border-right-lighten-5 {
  border-right: 1px solid #FFEBEE !important; }

.overlay-red.overlay-lighten-5 {
  background: #FFEBEE;
  /* The Fallback */
  background: rgba(255, 235, 238, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #FFEBEE; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFEBEE; }

.red.lighten-4 {
  color: #FFCDD2 !important; }

.bg-red.bg-lighten-4 {
  background-color: #FFCDD2 !important; }

.btn-red.btn-lighten-4 {
  border-color: #D32F2F !important;
  background-color: #FFCDD2 !important; }
  .btn-red.btn-lighten-4:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-lighten-4:focus, .btn-red.btn-lighten-4:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-lighten-4 {
  border-color: #FFCDD2 !important;
  color: #FFCDD2 !important; }
  .btn-outline-red.btn-outline-lighten-4:hover {
    background-color: #FFCDD2 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFCDD2 !important; }

.border-red.border-lighten-4 {
  border: 1px solid #FFCDD2 !important; }

.border-top-red.border-top-lighten-4 {
  border-top: 1px solid #FFCDD2 !important; }

.border-bottom-red.border-bottom-lighten-4 {
  border-bottom: 1px solid #FFCDD2 !important; }

.border-left-red.border-left-lighten-4 {
  border-left: 1px solid #FFCDD2 !important; }

.border-right-red.border-right-lighten-4 {
  border-right: 1px solid #FFCDD2 !important; }

.overlay-red.overlay-lighten-4 {
  background: #FFCDD2;
  /* The Fallback */
  background: rgba(255, 205, 210, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #FFCDD2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFCDD2; }

.red.lighten-3 {
  color: #EF9A9A !important; }

.bg-red.bg-lighten-3 {
  background-color: #EF9A9A !important; }

.btn-red.btn-lighten-3 {
  border-color: #D32F2F !important;
  background-color: #EF9A9A !important; }
  .btn-red.btn-lighten-3:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-lighten-3:focus, .btn-red.btn-lighten-3:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-lighten-3 {
  border-color: #EF9A9A !important;
  color: #EF9A9A !important; }
  .btn-outline-red.btn-outline-lighten-3:hover {
    background-color: #EF9A9A !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #EF9A9A !important; }

.border-red.border-lighten-3 {
  border: 1px solid #EF9A9A !important; }

.border-top-red.border-top-lighten-3 {
  border-top: 1px solid #EF9A9A !important; }

.border-bottom-red.border-bottom-lighten-3 {
  border-bottom: 1px solid #EF9A9A !important; }

.border-left-red.border-left-lighten-3 {
  border-left: 1px solid #EF9A9A !important; }

.border-right-red.border-right-lighten-3 {
  border-right: 1px solid #EF9A9A !important; }

.overlay-red.overlay-lighten-3 {
  background: #EF9A9A;
  /* The Fallback */
  background: rgba(239, 154, 154, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #EF9A9A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #EF9A9A; }

.red.lighten-2 {
  color: #E57373 !important; }

.bg-red.bg-lighten-2 {
  background-color: #E57373 !important; }

.btn-red.btn-lighten-2 {
  border-color: #D32F2F !important;
  background-color: #E57373 !important; }
  .btn-red.btn-lighten-2:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-lighten-2:focus, .btn-red.btn-lighten-2:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-lighten-2 {
  border-color: #E57373 !important;
  color: #E57373 !important; }
  .btn-outline-red.btn-outline-lighten-2:hover {
    background-color: #E57373 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E57373 !important; }

.border-red.border-lighten-2 {
  border: 1px solid #E57373 !important; }

.border-top-red.border-top-lighten-2 {
  border-top: 1px solid #E57373 !important; }

.border-bottom-red.border-bottom-lighten-2 {
  border-bottom: 1px solid #E57373 !important; }

.border-left-red.border-left-lighten-2 {
  border-left: 1px solid #E57373 !important; }

.border-right-red.border-right-lighten-2 {
  border-right: 1px solid #E57373 !important; }

.overlay-red.overlay-lighten-2 {
  background: #E57373;
  /* The Fallback */
  background: rgba(229, 115, 115, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #E57373; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E57373; }

.red.lighten-1 {
  color: #EF5350 !important; }

.bg-red.bg-lighten-1 {
  background-color: #EF5350 !important; }

.btn-red.btn-lighten-1 {
  border-color: #D32F2F !important;
  background-color: #EF5350 !important; }
  .btn-red.btn-lighten-1:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-lighten-1:focus, .btn-red.btn-lighten-1:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-lighten-1 {
  border-color: #EF5350 !important;
  color: #EF5350 !important; }
  .btn-outline-red.btn-outline-lighten-1:hover {
    background-color: #EF5350 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #EF5350 !important; }

.border-red.border-lighten-1 {
  border: 1px solid #EF5350 !important; }

.border-top-red.border-top-lighten-1 {
  border-top: 1px solid #EF5350 !important; }

.border-bottom-red.border-bottom-lighten-1 {
  border-bottom: 1px solid #EF5350 !important; }

.border-left-red.border-left-lighten-1 {
  border-left: 1px solid #EF5350 !important; }

.border-right-red.border-right-lighten-1 {
  border-right: 1px solid #EF5350 !important; }

.overlay-red.overlay-lighten-1 {
  background: #EF5350;
  /* The Fallback */
  background: rgba(239, 83, 80, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #EF5350; }

.edit-kanban-item select option.bg-color_name {
  background-color: #EF5350; }

.red {
  color: #F44336 !important; }

.bg-red {
  background-color: #F44336 !important; }
  .bg-red .card-header,
  .bg-red .card-footer {
    background-color: transparent; }

.alert-red {
  border-color: #f8827a !important;
  background-color: #f8827a !important;
  color: #710e06 !important; }
  .alert-red .alert-link {
    color: #4b0904 !important; }

.bullet.bullet-red {
  background-color: #F44336; }

.bg-light-red {
  background-color: rgba(244, 67, 54, 0.15); }

.border-red {
  border-color: #F44336; }

.bg-red.badge-glow,
.border-red.badge-glow {
  box-shadow: 0px 0px 10px #F44336; }

.overlay-red {
  background: #F44336;
  /* The Fallback */
  background: rgba(244, 67, 54, 0.8); }

/* .card-outline-red{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-red {
  border-color: !important;
  background-color: #F44336 !important;
  color: #FFFFFF; }
  .btn-red:hover {
    border-color: #E53935 !important;
    background-color: #EF5350 !important;
    color: #FFF !important; }
  .btn-red:focus, .btn-red:active {
    border-color: #D32F2F !important;
    background-color: #C62828 !important;
    color: #FFF !important; }

.btn-outline-red {
  border-color: #F44336;
  background-color: transparent;
  color: #F44336; }
  .btn-outline-red:hover {
    background-color: #F44336;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-red:before {
  background-color: #F44336; }

input[type="checkbox"].bg-red + .custom-control-label:before, input[type="radio"].bg-red + .custom-control-label:before {
  background-color: #F44336 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F44336 !important; }

.border-red {
  border: 1px solid #F44336 !important; }

.border-top-red {
  border-top: 1px solid #F44336; }

.border-bottom-red {
  border-bottom: 1px solid #F44336; }

.border-left-red {
  border-left: 1px solid #F44336; }

.border-right-red {
  border-right: 1px solid #F44336; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #F44336; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F44336; }

.red.darken-1 {
  color: #E53935 !important; }

.bg-red.bg-darken-1 {
  background-color: #E53935 !important; }

.btn-red.btn-darken-1 {
  border-color: #D32F2F !important;
  background-color: #E53935 !important; }
  .btn-red.btn-darken-1:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-darken-1:focus, .btn-red.btn-darken-1:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-darken-1 {
  border-color: #E53935 !important;
  color: #E53935 !important; }
  .btn-outline-red.btn-outline-darken-1:hover {
    background-color: #E53935 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E53935 !important; }

.border-red.border-darken-1 {
  border: 1px solid #E53935 !important; }

.border-top-red.border-top-darken-1 {
  border-top: 1px solid #E53935 !important; }

.border-bottom-red.border-bottom-darken-1 {
  border-bottom: 1px solid #E53935 !important; }

.border-left-red.border-left-darken-1 {
  border-left: 1px solid #E53935 !important; }

.border-right-red.border-right-darken-1 {
  border-right: 1px solid #E53935 !important; }

.overlay-red.overlay-darken-1 {
  background: #E53935;
  /* The Fallback */
  background: rgba(229, 57, 53, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #E53935; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E53935; }

.red.darken-2 {
  color: #D32F2F !important; }

.bg-red.bg-darken-2 {
  background-color: #D32F2F !important; }

.btn-red.btn-darken-2 {
  border-color: #D32F2F !important;
  background-color: #D32F2F !important; }
  .btn-red.btn-darken-2:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-darken-2:focus, .btn-red.btn-darken-2:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-darken-2 {
  border-color: #D32F2F !important;
  color: #D32F2F !important; }
  .btn-outline-red.btn-outline-darken-2:hover {
    background-color: #D32F2F !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #D32F2F !important; }

.border-red.border-darken-2 {
  border: 1px solid #D32F2F !important; }

.border-top-red.border-top-darken-2 {
  border-top: 1px solid #D32F2F !important; }

.border-bottom-red.border-bottom-darken-2 {
  border-bottom: 1px solid #D32F2F !important; }

.border-left-red.border-left-darken-2 {
  border-left: 1px solid #D32F2F !important; }

.border-right-red.border-right-darken-2 {
  border-right: 1px solid #D32F2F !important; }

.overlay-red.overlay-darken-2 {
  background: #D32F2F;
  /* The Fallback */
  background: rgba(211, 47, 47, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #D32F2F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #D32F2F; }

.red.darken-3 {
  color: #C62828 !important; }

.bg-red.bg-darken-3 {
  background-color: #C62828 !important; }

.btn-red.btn-darken-3 {
  border-color: #D32F2F !important;
  background-color: #C62828 !important; }
  .btn-red.btn-darken-3:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-darken-3:focus, .btn-red.btn-darken-3:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-darken-3 {
  border-color: #C62828 !important;
  color: #C62828 !important; }
  .btn-outline-red.btn-outline-darken-3:hover {
    background-color: #C62828 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #C62828 !important; }

.border-red.border-darken-3 {
  border: 1px solid #C62828 !important; }

.border-top-red.border-top-darken-3 {
  border-top: 1px solid #C62828 !important; }

.border-bottom-red.border-bottom-darken-3 {
  border-bottom: 1px solid #C62828 !important; }

.border-left-red.border-left-darken-3 {
  border-left: 1px solid #C62828 !important; }

.border-right-red.border-right-darken-3 {
  border-right: 1px solid #C62828 !important; }

.overlay-red.overlay-darken-3 {
  background: #C62828;
  /* The Fallback */
  background: rgba(198, 40, 40, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #C62828; }

.edit-kanban-item select option.bg-color_name {
  background-color: #C62828; }

.red.darken-4 {
  color: #B71C1C !important; }

.bg-red.bg-darken-4 {
  background-color: #B71C1C !important; }

.btn-red.btn-darken-4 {
  border-color: #D32F2F !important;
  background-color: #B71C1C !important; }
  .btn-red.btn-darken-4:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-darken-4:focus, .btn-red.btn-darken-4:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-darken-4 {
  border-color: #B71C1C !important;
  color: #B71C1C !important; }
  .btn-outline-red.btn-outline-darken-4:hover {
    background-color: #B71C1C !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #B71C1C !important; }

.border-red.border-darken-4 {
  border: 1px solid #B71C1C !important; }

.border-top-red.border-top-darken-4 {
  border-top: 1px solid #B71C1C !important; }

.border-bottom-red.border-bottom-darken-4 {
  border-bottom: 1px solid #B71C1C !important; }

.border-left-red.border-left-darken-4 {
  border-left: 1px solid #B71C1C !important; }

.border-right-red.border-right-darken-4 {
  border-right: 1px solid #B71C1C !important; }

.overlay-red.overlay-darken-4 {
  background: #B71C1C;
  /* The Fallback */
  background: rgba(183, 28, 28, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #B71C1C; }

.edit-kanban-item select option.bg-color_name {
  background-color: #B71C1C; }

.red.accent-1 {
  color: #FF8A80 !important; }

.bg-red.bg-accent-1 {
  background-color: #FF8A80 !important; }

.btn-red.btn-accent-1 {
  border-color: #D32F2F !important;
  background-color: #FF8A80 !important; }
  .btn-red.btn-accent-1:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-accent-1:focus, .btn-red.btn-accent-1:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-accent-1 {
  border-color: #FF8A80 !important;
  color: #FF8A80 !important; }
  .btn-outline-red.btn-outline-accent-1:hover {
    background-color: #FF8A80 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF8A80 !important; }

.border-red.border-accent-1 {
  border: 1px solid #FF8A80 !important; }

.border-top-red.border-top-accent-1 {
  border-top: 1px solid #FF8A80 !important; }

.border-bottom-red.border-bottom-accent-1 {
  border-bottom: 1px solid #FF8A80 !important; }

.border-left-red.border-left-accent-1 {
  border-left: 1px solid #FF8A80 !important; }

.border-right-red.border-right-accent-1 {
  border-right: 1px solid #FF8A80 !important; }

.overlay-red.overlay-accent-1 {
  background: #FF8A80;
  /* The Fallback */
  background: rgba(255, 138, 128, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #FF8A80; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF8A80; }

.red.accent-2 {
  color: #FF5252 !important; }

.bg-red.bg-accent-2 {
  background-color: #FF5252 !important; }

.btn-red.btn-accent-2 {
  border-color: #D32F2F !important;
  background-color: #FF5252 !important; }
  .btn-red.btn-accent-2:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-accent-2:focus, .btn-red.btn-accent-2:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-accent-2 {
  border-color: #FF5252 !important;
  color: #FF5252 !important; }
  .btn-outline-red.btn-outline-accent-2:hover {
    background-color: #FF5252 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF5252 !important; }

.border-red.border-accent-2 {
  border: 1px solid #FF5252 !important; }

.border-top-red.border-top-accent-2 {
  border-top: 1px solid #FF5252 !important; }

.border-bottom-red.border-bottom-accent-2 {
  border-bottom: 1px solid #FF5252 !important; }

.border-left-red.border-left-accent-2 {
  border-left: 1px solid #FF5252 !important; }

.border-right-red.border-right-accent-2 {
  border-right: 1px solid #FF5252 !important; }

.overlay-red.overlay-accent-2 {
  background: #FF5252;
  /* The Fallback */
  background: rgba(255, 82, 82, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #FF5252; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF5252; }

.red.accent-3 {
  color: #FF1744 !important; }

.bg-red.bg-accent-3 {
  background-color: #FF1744 !important; }

.btn-red.btn-accent-3 {
  border-color: #D32F2F !important;
  background-color: #FF1744 !important; }
  .btn-red.btn-accent-3:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-accent-3:focus, .btn-red.btn-accent-3:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-accent-3 {
  border-color: #FF1744 !important;
  color: #FF1744 !important; }
  .btn-outline-red.btn-outline-accent-3:hover {
    background-color: #FF1744 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF1744 !important; }

.border-red.border-accent-3 {
  border: 1px solid #FF1744 !important; }

.border-top-red.border-top-accent-3 {
  border-top: 1px solid #FF1744 !important; }

.border-bottom-red.border-bottom-accent-3 {
  border-bottom: 1px solid #FF1744 !important; }

.border-left-red.border-left-accent-3 {
  border-left: 1px solid #FF1744 !important; }

.border-right-red.border-right-accent-3 {
  border-right: 1px solid #FF1744 !important; }

.overlay-red.overlay-accent-3 {
  background: #FF1744;
  /* The Fallback */
  background: rgba(255, 23, 68, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #FF1744; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF1744; }

.red.accent-4 {
  color: #D50000 !important; }

.bg-red.bg-accent-4 {
  background-color: #D50000 !important; }

.btn-red.btn-accent-4 {
  border-color: #D32F2F !important;
  background-color: #D50000 !important; }
  .btn-red.btn-accent-4:hover {
    border-color: #D32F2F !important;
    background-color: #C62828 !important; }
  .btn-red.btn-accent-4:focus, .btn-red.btn-accent-4:active {
    border-color: #C62828 !important;
    background-color: #B71C1C !important; }

.btn-outline-red.btn-outline-accent-4 {
  border-color: #D50000 !important;
  color: #D50000 !important; }
  .btn-outline-red.btn-outline-accent-4:hover {
    background-color: #D50000 !important; }

input:focus ~ .bg-red {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #D50000 !important; }

.border-red.border-accent-4 {
  border: 1px solid #D50000 !important; }

.border-top-red.border-top-accent-4 {
  border-top: 1px solid #D50000 !important; }

.border-bottom-red.border-bottom-accent-4 {
  border-bottom: 1px solid #D50000 !important; }

.border-left-red.border-left-accent-4 {
  border-left: 1px solid #D50000 !important; }

.border-right-red.border-right-accent-4 {
  border-right: 1px solid #D50000 !important; }

.overlay-red.overlay-accent-4 {
  background: #D50000;
  /* The Fallback */
  background: rgba(213, 0, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=red]:before {
  background-color: #D50000; }

.edit-kanban-item select option.bg-color_name {
  background-color: #D50000; }

.pink.lighten-5 {
  color: #FCE4EC !important; }

.bg-pink.bg-lighten-5 {
  background-color: #FCE4EC !important; }

.btn-pink.btn-lighten-5 {
  border-color: #C2185B !important;
  background-color: #FCE4EC !important; }
  .btn-pink.btn-lighten-5:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-lighten-5:focus, .btn-pink.btn-lighten-5:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-lighten-5 {
  border-color: #FCE4EC !important;
  color: #FCE4EC !important; }
  .btn-outline-pink.btn-outline-lighten-5:hover {
    background-color: #FCE4EC !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FCE4EC !important; }

.border-pink.border-lighten-5 {
  border: 1px solid #FCE4EC !important; }

.border-top-pink.border-top-lighten-5 {
  border-top: 1px solid #FCE4EC !important; }

.border-bottom-pink.border-bottom-lighten-5 {
  border-bottom: 1px solid #FCE4EC !important; }

.border-left-pink.border-left-lighten-5 {
  border-left: 1px solid #FCE4EC !important; }

.border-right-pink.border-right-lighten-5 {
  border-right: 1px solid #FCE4EC !important; }

.overlay-pink.overlay-lighten-5 {
  background: #FCE4EC;
  /* The Fallback */
  background: rgba(252, 228, 236, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #FCE4EC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FCE4EC; }

.pink.lighten-4 {
  color: #F8BBD0 !important; }

.bg-pink.bg-lighten-4 {
  background-color: #F8BBD0 !important; }

.btn-pink.btn-lighten-4 {
  border-color: #C2185B !important;
  background-color: #F8BBD0 !important; }
  .btn-pink.btn-lighten-4:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-lighten-4:focus, .btn-pink.btn-lighten-4:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-lighten-4 {
  border-color: #F8BBD0 !important;
  color: #F8BBD0 !important; }
  .btn-outline-pink.btn-outline-lighten-4:hover {
    background-color: #F8BBD0 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F8BBD0 !important; }

.border-pink.border-lighten-4 {
  border: 1px solid #F8BBD0 !important; }

.border-top-pink.border-top-lighten-4 {
  border-top: 1px solid #F8BBD0 !important; }

.border-bottom-pink.border-bottom-lighten-4 {
  border-bottom: 1px solid #F8BBD0 !important; }

.border-left-pink.border-left-lighten-4 {
  border-left: 1px solid #F8BBD0 !important; }

.border-right-pink.border-right-lighten-4 {
  border-right: 1px solid #F8BBD0 !important; }

.overlay-pink.overlay-lighten-4 {
  background: #F8BBD0;
  /* The Fallback */
  background: rgba(248, 187, 208, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #F8BBD0; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F8BBD0; }

.pink.lighten-3 {
  color: #F48FB1 !important; }

.bg-pink.bg-lighten-3 {
  background-color: #F48FB1 !important; }

.btn-pink.btn-lighten-3 {
  border-color: #C2185B !important;
  background-color: #F48FB1 !important; }
  .btn-pink.btn-lighten-3:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-lighten-3:focus, .btn-pink.btn-lighten-3:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-lighten-3 {
  border-color: #F48FB1 !important;
  color: #F48FB1 !important; }
  .btn-outline-pink.btn-outline-lighten-3:hover {
    background-color: #F48FB1 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F48FB1 !important; }

.border-pink.border-lighten-3 {
  border: 1px solid #F48FB1 !important; }

.border-top-pink.border-top-lighten-3 {
  border-top: 1px solid #F48FB1 !important; }

.border-bottom-pink.border-bottom-lighten-3 {
  border-bottom: 1px solid #F48FB1 !important; }

.border-left-pink.border-left-lighten-3 {
  border-left: 1px solid #F48FB1 !important; }

.border-right-pink.border-right-lighten-3 {
  border-right: 1px solid #F48FB1 !important; }

.overlay-pink.overlay-lighten-3 {
  background: #F48FB1;
  /* The Fallback */
  background: rgba(244, 143, 177, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #F48FB1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F48FB1; }

.pink.lighten-2 {
  color: #F06292 !important; }

.bg-pink.bg-lighten-2 {
  background-color: #F06292 !important; }

.btn-pink.btn-lighten-2 {
  border-color: #C2185B !important;
  background-color: #F06292 !important; }
  .btn-pink.btn-lighten-2:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-lighten-2:focus, .btn-pink.btn-lighten-2:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-lighten-2 {
  border-color: #F06292 !important;
  color: #F06292 !important; }
  .btn-outline-pink.btn-outline-lighten-2:hover {
    background-color: #F06292 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F06292 !important; }

.border-pink.border-lighten-2 {
  border: 1px solid #F06292 !important; }

.border-top-pink.border-top-lighten-2 {
  border-top: 1px solid #F06292 !important; }

.border-bottom-pink.border-bottom-lighten-2 {
  border-bottom: 1px solid #F06292 !important; }

.border-left-pink.border-left-lighten-2 {
  border-left: 1px solid #F06292 !important; }

.border-right-pink.border-right-lighten-2 {
  border-right: 1px solid #F06292 !important; }

.overlay-pink.overlay-lighten-2 {
  background: #F06292;
  /* The Fallback */
  background: rgba(240, 98, 146, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #F06292; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F06292; }

.pink.lighten-1 {
  color: #EC407A !important; }

.bg-pink.bg-lighten-1 {
  background-color: #EC407A !important; }

.btn-pink.btn-lighten-1 {
  border-color: #C2185B !important;
  background-color: #EC407A !important; }
  .btn-pink.btn-lighten-1:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-lighten-1:focus, .btn-pink.btn-lighten-1:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-lighten-1 {
  border-color: #EC407A !important;
  color: #EC407A !important; }
  .btn-outline-pink.btn-outline-lighten-1:hover {
    background-color: #EC407A !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #EC407A !important; }

.border-pink.border-lighten-1 {
  border: 1px solid #EC407A !important; }

.border-top-pink.border-top-lighten-1 {
  border-top: 1px solid #EC407A !important; }

.border-bottom-pink.border-bottom-lighten-1 {
  border-bottom: 1px solid #EC407A !important; }

.border-left-pink.border-left-lighten-1 {
  border-left: 1px solid #EC407A !important; }

.border-right-pink.border-right-lighten-1 {
  border-right: 1px solid #EC407A !important; }

.overlay-pink.overlay-lighten-1 {
  background: #EC407A;
  /* The Fallback */
  background: rgba(236, 64, 122, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #EC407A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #EC407A; }

.pink {
  color: #E91E63 !important; }

.bg-pink {
  background-color: #E91E63 !important; }
  .bg-pink .card-header,
  .bg-pink .card-footer {
    background-color: transparent; }

.alert-pink {
  border-color: #ef5f90 !important;
  background-color: #ef5f90 !important;
  color: #4d081f !important; }
  .alert-pink .alert-link {
    color: #280410 !important; }

.bullet.bullet-pink {
  background-color: #E91E63; }

.bg-light-pink {
  background-color: rgba(233, 30, 99, 0.15); }

.border-pink {
  border-color: #E91E63; }

.bg-pink.badge-glow,
.border-pink.badge-glow {
  box-shadow: 0px 0px 10px #E91E63; }

.overlay-pink {
  background: #E91E63;
  /* The Fallback */
  background: rgba(233, 30, 99, 0.8); }

/* .card-outline-pink{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-pink {
  border-color: !important;
  background-color: #E91E63 !important;
  color: #FFFFFF; }
  .btn-pink:hover {
    border-color: #D81B60 !important;
    background-color: #EC407A !important;
    color: #FFF !important; }
  .btn-pink:focus, .btn-pink:active {
    border-color: #C2185B !important;
    background-color: #AD1457 !important;
    color: #FFF !important; }

.btn-outline-pink {
  border-color: #E91E63;
  background-color: transparent;
  color: #E91E63; }
  .btn-outline-pink:hover {
    background-color: #E91E63;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-pink:before {
  background-color: #E91E63; }

input[type="checkbox"].bg-pink + .custom-control-label:before, input[type="radio"].bg-pink + .custom-control-label:before {
  background-color: #E91E63 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E91E63 !important; }

.border-pink {
  border: 1px solid #E91E63 !important; }

.border-top-pink {
  border-top: 1px solid #E91E63; }

.border-bottom-pink {
  border-bottom: 1px solid #E91E63; }

.border-left-pink {
  border-left: 1px solid #E91E63; }

.border-right-pink {
  border-right: 1px solid #E91E63; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #E91E63; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E91E63; }

.pink.darken-1 {
  color: #D81B60 !important; }

.bg-pink.bg-darken-1 {
  background-color: #D81B60 !important; }

.btn-pink.btn-darken-1 {
  border-color: #C2185B !important;
  background-color: #D81B60 !important; }
  .btn-pink.btn-darken-1:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-darken-1:focus, .btn-pink.btn-darken-1:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-darken-1 {
  border-color: #D81B60 !important;
  color: #D81B60 !important; }
  .btn-outline-pink.btn-outline-darken-1:hover {
    background-color: #D81B60 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #D81B60 !important; }

.border-pink.border-darken-1 {
  border: 1px solid #D81B60 !important; }

.border-top-pink.border-top-darken-1 {
  border-top: 1px solid #D81B60 !important; }

.border-bottom-pink.border-bottom-darken-1 {
  border-bottom: 1px solid #D81B60 !important; }

.border-left-pink.border-left-darken-1 {
  border-left: 1px solid #D81B60 !important; }

.border-right-pink.border-right-darken-1 {
  border-right: 1px solid #D81B60 !important; }

.overlay-pink.overlay-darken-1 {
  background: #D81B60;
  /* The Fallback */
  background: rgba(216, 27, 96, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #D81B60; }

.edit-kanban-item select option.bg-color_name {
  background-color: #D81B60; }

.pink.darken-2 {
  color: #C2185B !important; }

.bg-pink.bg-darken-2 {
  background-color: #C2185B !important; }

.btn-pink.btn-darken-2 {
  border-color: #C2185B !important;
  background-color: #C2185B !important; }
  .btn-pink.btn-darken-2:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-darken-2:focus, .btn-pink.btn-darken-2:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-darken-2 {
  border-color: #C2185B !important;
  color: #C2185B !important; }
  .btn-outline-pink.btn-outline-darken-2:hover {
    background-color: #C2185B !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #C2185B !important; }

.border-pink.border-darken-2 {
  border: 1px solid #C2185B !important; }

.border-top-pink.border-top-darken-2 {
  border-top: 1px solid #C2185B !important; }

.border-bottom-pink.border-bottom-darken-2 {
  border-bottom: 1px solid #C2185B !important; }

.border-left-pink.border-left-darken-2 {
  border-left: 1px solid #C2185B !important; }

.border-right-pink.border-right-darken-2 {
  border-right: 1px solid #C2185B !important; }

.overlay-pink.overlay-darken-2 {
  background: #C2185B;
  /* The Fallback */
  background: rgba(194, 24, 91, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #C2185B; }

.edit-kanban-item select option.bg-color_name {
  background-color: #C2185B; }

.pink.darken-3 {
  color: #AD1457 !important; }

.bg-pink.bg-darken-3 {
  background-color: #AD1457 !important; }

.btn-pink.btn-darken-3 {
  border-color: #C2185B !important;
  background-color: #AD1457 !important; }
  .btn-pink.btn-darken-3:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-darken-3:focus, .btn-pink.btn-darken-3:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-darken-3 {
  border-color: #AD1457 !important;
  color: #AD1457 !important; }
  .btn-outline-pink.btn-outline-darken-3:hover {
    background-color: #AD1457 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #AD1457 !important; }

.border-pink.border-darken-3 {
  border: 1px solid #AD1457 !important; }

.border-top-pink.border-top-darken-3 {
  border-top: 1px solid #AD1457 !important; }

.border-bottom-pink.border-bottom-darken-3 {
  border-bottom: 1px solid #AD1457 !important; }

.border-left-pink.border-left-darken-3 {
  border-left: 1px solid #AD1457 !important; }

.border-right-pink.border-right-darken-3 {
  border-right: 1px solid #AD1457 !important; }

.overlay-pink.overlay-darken-3 {
  background: #AD1457;
  /* The Fallback */
  background: rgba(173, 20, 87, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #AD1457; }

.edit-kanban-item select option.bg-color_name {
  background-color: #AD1457; }

.pink.darken-4 {
  color: #880E4F !important; }

.bg-pink.bg-darken-4 {
  background-color: #880E4F !important; }

.btn-pink.btn-darken-4 {
  border-color: #C2185B !important;
  background-color: #880E4F !important; }
  .btn-pink.btn-darken-4:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-darken-4:focus, .btn-pink.btn-darken-4:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-darken-4 {
  border-color: #880E4F !important;
  color: #880E4F !important; }
  .btn-outline-pink.btn-outline-darken-4:hover {
    background-color: #880E4F !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #880E4F !important; }

.border-pink.border-darken-4 {
  border: 1px solid #880E4F !important; }

.border-top-pink.border-top-darken-4 {
  border-top: 1px solid #880E4F !important; }

.border-bottom-pink.border-bottom-darken-4 {
  border-bottom: 1px solid #880E4F !important; }

.border-left-pink.border-left-darken-4 {
  border-left: 1px solid #880E4F !important; }

.border-right-pink.border-right-darken-4 {
  border-right: 1px solid #880E4F !important; }

.overlay-pink.overlay-darken-4 {
  background: #880E4F;
  /* The Fallback */
  background: rgba(136, 14, 79, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #880E4F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #880E4F; }

.pink.accent-1 {
  color: #FF80AB !important; }

.bg-pink.bg-accent-1 {
  background-color: #FF80AB !important; }

.btn-pink.btn-accent-1 {
  border-color: #C2185B !important;
  background-color: #FF80AB !important; }
  .btn-pink.btn-accent-1:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-accent-1:focus, .btn-pink.btn-accent-1:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-accent-1 {
  border-color: #FF80AB !important;
  color: #FF80AB !important; }
  .btn-outline-pink.btn-outline-accent-1:hover {
    background-color: #FF80AB !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF80AB !important; }

.border-pink.border-accent-1 {
  border: 1px solid #FF80AB !important; }

.border-top-pink.border-top-accent-1 {
  border-top: 1px solid #FF80AB !important; }

.border-bottom-pink.border-bottom-accent-1 {
  border-bottom: 1px solid #FF80AB !important; }

.border-left-pink.border-left-accent-1 {
  border-left: 1px solid #FF80AB !important; }

.border-right-pink.border-right-accent-1 {
  border-right: 1px solid #FF80AB !important; }

.overlay-pink.overlay-accent-1 {
  background: #FF80AB;
  /* The Fallback */
  background: rgba(255, 128, 171, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #FF80AB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF80AB; }

.pink.accent-2 {
  color: #FF4081 !important; }

.bg-pink.bg-accent-2 {
  background-color: #FF4081 !important; }

.btn-pink.btn-accent-2 {
  border-color: #C2185B !important;
  background-color: #FF4081 !important; }
  .btn-pink.btn-accent-2:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-accent-2:focus, .btn-pink.btn-accent-2:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-accent-2 {
  border-color: #FF4081 !important;
  color: #FF4081 !important; }
  .btn-outline-pink.btn-outline-accent-2:hover {
    background-color: #FF4081 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF4081 !important; }

.border-pink.border-accent-2 {
  border: 1px solid #FF4081 !important; }

.border-top-pink.border-top-accent-2 {
  border-top: 1px solid #FF4081 !important; }

.border-bottom-pink.border-bottom-accent-2 {
  border-bottom: 1px solid #FF4081 !important; }

.border-left-pink.border-left-accent-2 {
  border-left: 1px solid #FF4081 !important; }

.border-right-pink.border-right-accent-2 {
  border-right: 1px solid #FF4081 !important; }

.overlay-pink.overlay-accent-2 {
  background: #FF4081;
  /* The Fallback */
  background: rgba(255, 64, 129, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #FF4081; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF4081; }

.pink.accent-3 {
  color: #F50057 !important; }

.bg-pink.bg-accent-3 {
  background-color: #F50057 !important; }

.btn-pink.btn-accent-3 {
  border-color: #C2185B !important;
  background-color: #F50057 !important; }
  .btn-pink.btn-accent-3:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-accent-3:focus, .btn-pink.btn-accent-3:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-accent-3 {
  border-color: #F50057 !important;
  color: #F50057 !important; }
  .btn-outline-pink.btn-outline-accent-3:hover {
    background-color: #F50057 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F50057 !important; }

.border-pink.border-accent-3 {
  border: 1px solid #F50057 !important; }

.border-top-pink.border-top-accent-3 {
  border-top: 1px solid #F50057 !important; }

.border-bottom-pink.border-bottom-accent-3 {
  border-bottom: 1px solid #F50057 !important; }

.border-left-pink.border-left-accent-3 {
  border-left: 1px solid #F50057 !important; }

.border-right-pink.border-right-accent-3 {
  border-right: 1px solid #F50057 !important; }

.overlay-pink.overlay-accent-3 {
  background: #F50057;
  /* The Fallback */
  background: rgba(245, 0, 87, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #F50057; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F50057; }

.pink.accent-4 {
  color: #C51162 !important; }

.bg-pink.bg-accent-4 {
  background-color: #C51162 !important; }

.btn-pink.btn-accent-4 {
  border-color: #C2185B !important;
  background-color: #C51162 !important; }
  .btn-pink.btn-accent-4:hover {
    border-color: #C2185B !important;
    background-color: #AD1457 !important; }
  .btn-pink.btn-accent-4:focus, .btn-pink.btn-accent-4:active {
    border-color: #AD1457 !important;
    background-color: #880E4F !important; }

.btn-outline-pink.btn-outline-accent-4 {
  border-color: #C51162 !important;
  color: #C51162 !important; }
  .btn-outline-pink.btn-outline-accent-4:hover {
    background-color: #C51162 !important; }

input:focus ~ .bg-pink {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #C51162 !important; }

.border-pink.border-accent-4 {
  border: 1px solid #C51162 !important; }

.border-top-pink.border-top-accent-4 {
  border-top: 1px solid #C51162 !important; }

.border-bottom-pink.border-bottom-accent-4 {
  border-bottom: 1px solid #C51162 !important; }

.border-left-pink.border-left-accent-4 {
  border-left: 1px solid #C51162 !important; }

.border-right-pink.border-right-accent-4 {
  border-right: 1px solid #C51162 !important; }

.overlay-pink.overlay-accent-4 {
  background: #C51162;
  /* The Fallback */
  background: rgba(197, 17, 98, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=pink]:before {
  background-color: #C51162; }

.edit-kanban-item select option.bg-color_name {
  background-color: #C51162; }

.purple.lighten-5 {
  color: #F3E5F5 !important; }

.bg-purple.bg-lighten-5 {
  background-color: #F3E5F5 !important; }

.btn-purple.btn-lighten-5 {
  border-color: #7B1FA2 !important;
  background-color: #F3E5F5 !important; }
  .btn-purple.btn-lighten-5:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-lighten-5:focus, .btn-purple.btn-lighten-5:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-lighten-5 {
  border-color: #F3E5F5 !important;
  color: #F3E5F5 !important; }
  .btn-outline-purple.btn-outline-lighten-5:hover {
    background-color: #F3E5F5 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F3E5F5 !important; }

.border-purple.border-lighten-5 {
  border: 1px solid #F3E5F5 !important; }

.border-top-purple.border-top-lighten-5 {
  border-top: 1px solid #F3E5F5 !important; }

.border-bottom-purple.border-bottom-lighten-5 {
  border-bottom: 1px solid #F3E5F5 !important; }

.border-left-purple.border-left-lighten-5 {
  border-left: 1px solid #F3E5F5 !important; }

.border-right-purple.border-right-lighten-5 {
  border-right: 1px solid #F3E5F5 !important; }

.overlay-purple.overlay-lighten-5 {
  background: #F3E5F5;
  /* The Fallback */
  background: rgba(243, 229, 245, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #F3E5F5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F3E5F5; }

.purple.lighten-4 {
  color: #E1BEE7 !important; }

.bg-purple.bg-lighten-4 {
  background-color: #E1BEE7 !important; }

.btn-purple.btn-lighten-4 {
  border-color: #7B1FA2 !important;
  background-color: #E1BEE7 !important; }
  .btn-purple.btn-lighten-4:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-lighten-4:focus, .btn-purple.btn-lighten-4:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-lighten-4 {
  border-color: #E1BEE7 !important;
  color: #E1BEE7 !important; }
  .btn-outline-purple.btn-outline-lighten-4:hover {
    background-color: #E1BEE7 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E1BEE7 !important; }

.border-purple.border-lighten-4 {
  border: 1px solid #E1BEE7 !important; }

.border-top-purple.border-top-lighten-4 {
  border-top: 1px solid #E1BEE7 !important; }

.border-bottom-purple.border-bottom-lighten-4 {
  border-bottom: 1px solid #E1BEE7 !important; }

.border-left-purple.border-left-lighten-4 {
  border-left: 1px solid #E1BEE7 !important; }

.border-right-purple.border-right-lighten-4 {
  border-right: 1px solid #E1BEE7 !important; }

.overlay-purple.overlay-lighten-4 {
  background: #E1BEE7;
  /* The Fallback */
  background: rgba(225, 190, 231, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #E1BEE7; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E1BEE7; }

.purple.lighten-3 {
  color: #CE93D8 !important; }

.bg-purple.bg-lighten-3 {
  background-color: #CE93D8 !important; }

.btn-purple.btn-lighten-3 {
  border-color: #7B1FA2 !important;
  background-color: #CE93D8 !important; }
  .btn-purple.btn-lighten-3:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-lighten-3:focus, .btn-purple.btn-lighten-3:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-lighten-3 {
  border-color: #CE93D8 !important;
  color: #CE93D8 !important; }
  .btn-outline-purple.btn-outline-lighten-3:hover {
    background-color: #CE93D8 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CE93D8 !important; }

.border-purple.border-lighten-3 {
  border: 1px solid #CE93D8 !important; }

.border-top-purple.border-top-lighten-3 {
  border-top: 1px solid #CE93D8 !important; }

.border-bottom-purple.border-bottom-lighten-3 {
  border-bottom: 1px solid #CE93D8 !important; }

.border-left-purple.border-left-lighten-3 {
  border-left: 1px solid #CE93D8 !important; }

.border-right-purple.border-right-lighten-3 {
  border-right: 1px solid #CE93D8 !important; }

.overlay-purple.overlay-lighten-3 {
  background: #CE93D8;
  /* The Fallback */
  background: rgba(206, 147, 216, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #CE93D8; }

.edit-kanban-item select option.bg-color_name {
  background-color: #CE93D8; }

.purple.lighten-2 {
  color: #BA68C8 !important; }

.bg-purple.bg-lighten-2 {
  background-color: #BA68C8 !important; }

.btn-purple.btn-lighten-2 {
  border-color: #7B1FA2 !important;
  background-color: #BA68C8 !important; }
  .btn-purple.btn-lighten-2:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-lighten-2:focus, .btn-purple.btn-lighten-2:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-lighten-2 {
  border-color: #BA68C8 !important;
  color: #BA68C8 !important; }
  .btn-outline-purple.btn-outline-lighten-2:hover {
    background-color: #BA68C8 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #BA68C8 !important; }

.border-purple.border-lighten-2 {
  border: 1px solid #BA68C8 !important; }

.border-top-purple.border-top-lighten-2 {
  border-top: 1px solid #BA68C8 !important; }

.border-bottom-purple.border-bottom-lighten-2 {
  border-bottom: 1px solid #BA68C8 !important; }

.border-left-purple.border-left-lighten-2 {
  border-left: 1px solid #BA68C8 !important; }

.border-right-purple.border-right-lighten-2 {
  border-right: 1px solid #BA68C8 !important; }

.overlay-purple.overlay-lighten-2 {
  background: #BA68C8;
  /* The Fallback */
  background: rgba(186, 104, 200, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #BA68C8; }

.edit-kanban-item select option.bg-color_name {
  background-color: #BA68C8; }

.purple.lighten-1 {
  color: #AB47BC !important; }

.bg-purple.bg-lighten-1 {
  background-color: #AB47BC !important; }

.btn-purple.btn-lighten-1 {
  border-color: #7B1FA2 !important;
  background-color: #AB47BC !important; }
  .btn-purple.btn-lighten-1:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-lighten-1:focus, .btn-purple.btn-lighten-1:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-lighten-1 {
  border-color: #AB47BC !important;
  color: #AB47BC !important; }
  .btn-outline-purple.btn-outline-lighten-1:hover {
    background-color: #AB47BC !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #AB47BC !important; }

.border-purple.border-lighten-1 {
  border: 1px solid #AB47BC !important; }

.border-top-purple.border-top-lighten-1 {
  border-top: 1px solid #AB47BC !important; }

.border-bottom-purple.border-bottom-lighten-1 {
  border-bottom: 1px solid #AB47BC !important; }

.border-left-purple.border-left-lighten-1 {
  border-left: 1px solid #AB47BC !important; }

.border-right-purple.border-right-lighten-1 {
  border-right: 1px solid #AB47BC !important; }

.overlay-purple.overlay-lighten-1 {
  background: #AB47BC;
  /* The Fallback */
  background: rgba(171, 71, 188, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #AB47BC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #AB47BC; }

.purple {
  color: #9C27B0 !important; }

.bg-purple {
  background-color: #9C27B0 !important; }
  .bg-purple .card-header,
  .bg-purple .card-footer {
    background-color: transparent; }

.alert-purple {
  border-color: #c248d6 !important;
  background-color: #c248d6 !important;
  color: #1a071e !important; }
  .alert-purple .alert-link {
    color: black !important; }

.bullet.bullet-purple {
  background-color: #9C27B0; }

.bg-light-purple {
  background-color: rgba(156, 39, 176, 0.15); }

.border-purple {
  border-color: #9C27B0; }

.bg-purple.badge-glow,
.border-purple.badge-glow {
  box-shadow: 0px 0px 10px #9C27B0; }

.overlay-purple {
  background: #9C27B0;
  /* The Fallback */
  background: rgba(156, 39, 176, 0.8); }

/* .card-outline-purple{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-purple {
  border-color: !important;
  background-color: #9C27B0 !important;
  color: #FFFFFF; }
  .btn-purple:hover {
    border-color: #8E24AA !important;
    background-color: #AB47BC !important;
    color: #FFF !important; }
  .btn-purple:focus, .btn-purple:active {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important;
    color: #FFF !important; }

.btn-outline-purple {
  border-color: #9C27B0;
  background-color: transparent;
  color: #9C27B0; }
  .btn-outline-purple:hover {
    background-color: #9C27B0;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-purple:before {
  background-color: #9C27B0; }

input[type="checkbox"].bg-purple + .custom-control-label:before, input[type="radio"].bg-purple + .custom-control-label:before {
  background-color: #9C27B0 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #9C27B0 !important; }

.border-purple {
  border: 1px solid #9C27B0 !important; }

.border-top-purple {
  border-top: 1px solid #9C27B0; }

.border-bottom-purple {
  border-bottom: 1px solid #9C27B0; }

.border-left-purple {
  border-left: 1px solid #9C27B0; }

.border-right-purple {
  border-right: 1px solid #9C27B0; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #9C27B0; }

.edit-kanban-item select option.bg-color_name {
  background-color: #9C27B0; }

.purple.darken-1 {
  color: #8E24AA !important; }

.bg-purple.bg-darken-1 {
  background-color: #8E24AA !important; }

.btn-purple.btn-darken-1 {
  border-color: #7B1FA2 !important;
  background-color: #8E24AA !important; }
  .btn-purple.btn-darken-1:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-darken-1:focus, .btn-purple.btn-darken-1:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-darken-1 {
  border-color: #8E24AA !important;
  color: #8E24AA !important; }
  .btn-outline-purple.btn-outline-darken-1:hover {
    background-color: #8E24AA !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #8E24AA !important; }

.border-purple.border-darken-1 {
  border: 1px solid #8E24AA !important; }

.border-top-purple.border-top-darken-1 {
  border-top: 1px solid #8E24AA !important; }

.border-bottom-purple.border-bottom-darken-1 {
  border-bottom: 1px solid #8E24AA !important; }

.border-left-purple.border-left-darken-1 {
  border-left: 1px solid #8E24AA !important; }

.border-right-purple.border-right-darken-1 {
  border-right: 1px solid #8E24AA !important; }

.overlay-purple.overlay-darken-1 {
  background: #8E24AA;
  /* The Fallback */
  background: rgba(142, 36, 170, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #8E24AA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #8E24AA; }

.purple.darken-2 {
  color: #7B1FA2 !important; }

.bg-purple.bg-darken-2 {
  background-color: #7B1FA2 !important; }

.btn-purple.btn-darken-2 {
  border-color: #7B1FA2 !important;
  background-color: #7B1FA2 !important; }
  .btn-purple.btn-darken-2:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-darken-2:focus, .btn-purple.btn-darken-2:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-darken-2 {
  border-color: #7B1FA2 !important;
  color: #7B1FA2 !important; }
  .btn-outline-purple.btn-outline-darken-2:hover {
    background-color: #7B1FA2 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #7B1FA2 !important; }

.border-purple.border-darken-2 {
  border: 1px solid #7B1FA2 !important; }

.border-top-purple.border-top-darken-2 {
  border-top: 1px solid #7B1FA2 !important; }

.border-bottom-purple.border-bottom-darken-2 {
  border-bottom: 1px solid #7B1FA2 !important; }

.border-left-purple.border-left-darken-2 {
  border-left: 1px solid #7B1FA2 !important; }

.border-right-purple.border-right-darken-2 {
  border-right: 1px solid #7B1FA2 !important; }

.overlay-purple.overlay-darken-2 {
  background: #7B1FA2;
  /* The Fallback */
  background: rgba(123, 31, 162, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #7B1FA2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #7B1FA2; }

.purple.darken-3 {
  color: #6A1B9A !important; }

.bg-purple.bg-darken-3 {
  background-color: #6A1B9A !important; }

.btn-purple.btn-darken-3 {
  border-color: #7B1FA2 !important;
  background-color: #6A1B9A !important; }
  .btn-purple.btn-darken-3:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-darken-3:focus, .btn-purple.btn-darken-3:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-darken-3 {
  border-color: #6A1B9A !important;
  color: #6A1B9A !important; }
  .btn-outline-purple.btn-outline-darken-3:hover {
    background-color: #6A1B9A !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6A1B9A !important; }

.border-purple.border-darken-3 {
  border: 1px solid #6A1B9A !important; }

.border-top-purple.border-top-darken-3 {
  border-top: 1px solid #6A1B9A !important; }

.border-bottom-purple.border-bottom-darken-3 {
  border-bottom: 1px solid #6A1B9A !important; }

.border-left-purple.border-left-darken-3 {
  border-left: 1px solid #6A1B9A !important; }

.border-right-purple.border-right-darken-3 {
  border-right: 1px solid #6A1B9A !important; }

.overlay-purple.overlay-darken-3 {
  background: #6A1B9A;
  /* The Fallback */
  background: rgba(106, 27, 154, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #6A1B9A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #6A1B9A; }

.purple.darken-4 {
  color: #4A148C !important; }

.bg-purple.bg-darken-4 {
  background-color: #4A148C !important; }

.btn-purple.btn-darken-4 {
  border-color: #7B1FA2 !important;
  background-color: #4A148C !important; }
  .btn-purple.btn-darken-4:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-darken-4:focus, .btn-purple.btn-darken-4:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-darken-4 {
  border-color: #4A148C !important;
  color: #4A148C !important; }
  .btn-outline-purple.btn-outline-darken-4:hover {
    background-color: #4A148C !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4A148C !important; }

.border-purple.border-darken-4 {
  border: 1px solid #4A148C !important; }

.border-top-purple.border-top-darken-4 {
  border-top: 1px solid #4A148C !important; }

.border-bottom-purple.border-bottom-darken-4 {
  border-bottom: 1px solid #4A148C !important; }

.border-left-purple.border-left-darken-4 {
  border-left: 1px solid #4A148C !important; }

.border-right-purple.border-right-darken-4 {
  border-right: 1px solid #4A148C !important; }

.overlay-purple.overlay-darken-4 {
  background: #4A148C;
  /* The Fallback */
  background: rgba(74, 20, 140, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #4A148C; }

.edit-kanban-item select option.bg-color_name {
  background-color: #4A148C; }

.purple.accent-1 {
  color: #EA80FC !important; }

.bg-purple.bg-accent-1 {
  background-color: #EA80FC !important; }

.btn-purple.btn-accent-1 {
  border-color: #7B1FA2 !important;
  background-color: #EA80FC !important; }
  .btn-purple.btn-accent-1:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-accent-1:focus, .btn-purple.btn-accent-1:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-accent-1 {
  border-color: #EA80FC !important;
  color: #EA80FC !important; }
  .btn-outline-purple.btn-outline-accent-1:hover {
    background-color: #EA80FC !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #EA80FC !important; }

.border-purple.border-accent-1 {
  border: 1px solid #EA80FC !important; }

.border-top-purple.border-top-accent-1 {
  border-top: 1px solid #EA80FC !important; }

.border-bottom-purple.border-bottom-accent-1 {
  border-bottom: 1px solid #EA80FC !important; }

.border-left-purple.border-left-accent-1 {
  border-left: 1px solid #EA80FC !important; }

.border-right-purple.border-right-accent-1 {
  border-right: 1px solid #EA80FC !important; }

.overlay-purple.overlay-accent-1 {
  background: #EA80FC;
  /* The Fallback */
  background: rgba(234, 128, 252, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #EA80FC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #EA80FC; }

.purple.accent-2 {
  color: #E040FB !important; }

.bg-purple.bg-accent-2 {
  background-color: #E040FB !important; }

.btn-purple.btn-accent-2 {
  border-color: #7B1FA2 !important;
  background-color: #E040FB !important; }
  .btn-purple.btn-accent-2:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-accent-2:focus, .btn-purple.btn-accent-2:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-accent-2 {
  border-color: #E040FB !important;
  color: #E040FB !important; }
  .btn-outline-purple.btn-outline-accent-2:hover {
    background-color: #E040FB !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E040FB !important; }

.border-purple.border-accent-2 {
  border: 1px solid #E040FB !important; }

.border-top-purple.border-top-accent-2 {
  border-top: 1px solid #E040FB !important; }

.border-bottom-purple.border-bottom-accent-2 {
  border-bottom: 1px solid #E040FB !important; }

.border-left-purple.border-left-accent-2 {
  border-left: 1px solid #E040FB !important; }

.border-right-purple.border-right-accent-2 {
  border-right: 1px solid #E040FB !important; }

.overlay-purple.overlay-accent-2 {
  background: #E040FB;
  /* The Fallback */
  background: rgba(224, 64, 251, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #E040FB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E040FB; }

.purple.accent-3 {
  color: #D500F9 !important; }

.bg-purple.bg-accent-3 {
  background-color: #D500F9 !important; }

.btn-purple.btn-accent-3 {
  border-color: #7B1FA2 !important;
  background-color: #D500F9 !important; }
  .btn-purple.btn-accent-3:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-accent-3:focus, .btn-purple.btn-accent-3:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-accent-3 {
  border-color: #D500F9 !important;
  color: #D500F9 !important; }
  .btn-outline-purple.btn-outline-accent-3:hover {
    background-color: #D500F9 !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #D500F9 !important; }

.border-purple.border-accent-3 {
  border: 1px solid #D500F9 !important; }

.border-top-purple.border-top-accent-3 {
  border-top: 1px solid #D500F9 !important; }

.border-bottom-purple.border-bottom-accent-3 {
  border-bottom: 1px solid #D500F9 !important; }

.border-left-purple.border-left-accent-3 {
  border-left: 1px solid #D500F9 !important; }

.border-right-purple.border-right-accent-3 {
  border-right: 1px solid #D500F9 !important; }

.overlay-purple.overlay-accent-3 {
  background: #D500F9;
  /* The Fallback */
  background: rgba(213, 0, 249, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #D500F9; }

.edit-kanban-item select option.bg-color_name {
  background-color: #D500F9; }

.purple.accent-4 {
  color: #DD00FF !important; }

.bg-purple.bg-accent-4 {
  background-color: #DD00FF !important; }

.btn-purple.btn-accent-4 {
  border-color: #7B1FA2 !important;
  background-color: #DD00FF !important; }
  .btn-purple.btn-accent-4:hover {
    border-color: #7B1FA2 !important;
    background-color: #6A1B9A !important; }
  .btn-purple.btn-accent-4:focus, .btn-purple.btn-accent-4:active {
    border-color: #6A1B9A !important;
    background-color: #4A148C !important; }

.btn-outline-purple.btn-outline-accent-4 {
  border-color: #DD00FF !important;
  color: #DD00FF !important; }
  .btn-outline-purple.btn-outline-accent-4:hover {
    background-color: #DD00FF !important; }

input:focus ~ .bg-purple {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #DD00FF !important; }

.border-purple.border-accent-4 {
  border: 1px solid #DD00FF !important; }

.border-top-purple.border-top-accent-4 {
  border-top: 1px solid #DD00FF !important; }

.border-bottom-purple.border-bottom-accent-4 {
  border-bottom: 1px solid #DD00FF !important; }

.border-left-purple.border-left-accent-4 {
  border-left: 1px solid #DD00FF !important; }

.border-right-purple.border-right-accent-4 {
  border-right: 1px solid #DD00FF !important; }

.overlay-purple.overlay-accent-4 {
  background: #DD00FF;
  /* The Fallback */
  background: rgba(221, 0, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=purple]:before {
  background-color: #DD00FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #DD00FF; }

.blue.lighten-5 {
  color: #E3F2FD !important; }

.bg-blue.bg-lighten-5 {
  background-color: #E3F2FD !important; }

.btn-blue.btn-lighten-5 {
  border-color: #1976D2 !important;
  background-color: #E3F2FD !important; }
  .btn-blue.btn-lighten-5:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-lighten-5:focus, .btn-blue.btn-lighten-5:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-lighten-5 {
  border-color: #E3F2FD !important;
  color: #E3F2FD !important; }
  .btn-outline-blue.btn-outline-lighten-5:hover {
    background-color: #E3F2FD !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E3F2FD !important; }

.border-blue.border-lighten-5 {
  border: 1px solid #E3F2FD !important; }

.border-top-blue.border-top-lighten-5 {
  border-top: 1px solid #E3F2FD !important; }

.border-bottom-blue.border-bottom-lighten-5 {
  border-bottom: 1px solid #E3F2FD !important; }

.border-left-blue.border-left-lighten-5 {
  border-left: 1px solid #E3F2FD !important; }

.border-right-blue.border-right-lighten-5 {
  border-right: 1px solid #E3F2FD !important; }

.overlay-blue.overlay-lighten-5 {
  background: #E3F2FD;
  /* The Fallback */
  background: rgba(227, 242, 253, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #E3F2FD; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E3F2FD; }

.blue.lighten-4 {
  color: #BBDEFB !important; }

.bg-blue.bg-lighten-4 {
  background-color: #BBDEFB !important; }

.btn-blue.btn-lighten-4 {
  border-color: #1976D2 !important;
  background-color: #BBDEFB !important; }
  .btn-blue.btn-lighten-4:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-lighten-4:focus, .btn-blue.btn-lighten-4:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-lighten-4 {
  border-color: #BBDEFB !important;
  color: #BBDEFB !important; }
  .btn-outline-blue.btn-outline-lighten-4:hover {
    background-color: #BBDEFB !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #BBDEFB !important; }

.border-blue.border-lighten-4 {
  border: 1px solid #BBDEFB !important; }

.border-top-blue.border-top-lighten-4 {
  border-top: 1px solid #BBDEFB !important; }

.border-bottom-blue.border-bottom-lighten-4 {
  border-bottom: 1px solid #BBDEFB !important; }

.border-left-blue.border-left-lighten-4 {
  border-left: 1px solid #BBDEFB !important; }

.border-right-blue.border-right-lighten-4 {
  border-right: 1px solid #BBDEFB !important; }

.overlay-blue.overlay-lighten-4 {
  background: #BBDEFB;
  /* The Fallback */
  background: rgba(187, 222, 251, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #BBDEFB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #BBDEFB; }

.blue.lighten-3 {
  color: #90CAF9 !important; }

.bg-blue.bg-lighten-3 {
  background-color: #90CAF9 !important; }

.btn-blue.btn-lighten-3 {
  border-color: #1976D2 !important;
  background-color: #90CAF9 !important; }
  .btn-blue.btn-lighten-3:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-lighten-3:focus, .btn-blue.btn-lighten-3:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-lighten-3 {
  border-color: #90CAF9 !important;
  color: #90CAF9 !important; }
  .btn-outline-blue.btn-outline-lighten-3:hover {
    background-color: #90CAF9 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #90CAF9 !important; }

.border-blue.border-lighten-3 {
  border: 1px solid #90CAF9 !important; }

.border-top-blue.border-top-lighten-3 {
  border-top: 1px solid #90CAF9 !important; }

.border-bottom-blue.border-bottom-lighten-3 {
  border-bottom: 1px solid #90CAF9 !important; }

.border-left-blue.border-left-lighten-3 {
  border-left: 1px solid #90CAF9 !important; }

.border-right-blue.border-right-lighten-3 {
  border-right: 1px solid #90CAF9 !important; }

.overlay-blue.overlay-lighten-3 {
  background: #90CAF9;
  /* The Fallback */
  background: rgba(144, 202, 249, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #90CAF9; }

.edit-kanban-item select option.bg-color_name {
  background-color: #90CAF9; }

.blue.lighten-2 {
  color: #64B5F6 !important; }

.bg-blue.bg-lighten-2 {
  background-color: #64B5F6 !important; }

.btn-blue.btn-lighten-2 {
  border-color: #1976D2 !important;
  background-color: #64B5F6 !important; }
  .btn-blue.btn-lighten-2:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-lighten-2:focus, .btn-blue.btn-lighten-2:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-lighten-2 {
  border-color: #64B5F6 !important;
  color: #64B5F6 !important; }
  .btn-outline-blue.btn-outline-lighten-2:hover {
    background-color: #64B5F6 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #64B5F6 !important; }

.border-blue.border-lighten-2 {
  border: 1px solid #64B5F6 !important; }

.border-top-blue.border-top-lighten-2 {
  border-top: 1px solid #64B5F6 !important; }

.border-bottom-blue.border-bottom-lighten-2 {
  border-bottom: 1px solid #64B5F6 !important; }

.border-left-blue.border-left-lighten-2 {
  border-left: 1px solid #64B5F6 !important; }

.border-right-blue.border-right-lighten-2 {
  border-right: 1px solid #64B5F6 !important; }

.overlay-blue.overlay-lighten-2 {
  background: #64B5F6;
  /* The Fallback */
  background: rgba(100, 181, 246, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #64B5F6; }

.edit-kanban-item select option.bg-color_name {
  background-color: #64B5F6; }

.blue.lighten-1 {
  color: #42A5F5 !important; }

.bg-blue.bg-lighten-1 {
  background-color: #42A5F5 !important; }

.btn-blue.btn-lighten-1 {
  border-color: #1976D2 !important;
  background-color: #42A5F5 !important; }
  .btn-blue.btn-lighten-1:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-lighten-1:focus, .btn-blue.btn-lighten-1:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-lighten-1 {
  border-color: #42A5F5 !important;
  color: #42A5F5 !important; }
  .btn-outline-blue.btn-outline-lighten-1:hover {
    background-color: #42A5F5 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #42A5F5 !important; }

.border-blue.border-lighten-1 {
  border: 1px solid #42A5F5 !important; }

.border-top-blue.border-top-lighten-1 {
  border-top: 1px solid #42A5F5 !important; }

.border-bottom-blue.border-bottom-lighten-1 {
  border-bottom: 1px solid #42A5F5 !important; }

.border-left-blue.border-left-lighten-1 {
  border-left: 1px solid #42A5F5 !important; }

.border-right-blue.border-right-lighten-1 {
  border-right: 1px solid #42A5F5 !important; }

.overlay-blue.overlay-lighten-1 {
  background: #42A5F5;
  /* The Fallback */
  background: rgba(66, 165, 245, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #42A5F5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #42A5F5; }

.blue {
  color: #2196F3 !important; }

.bg-blue {
  background-color: #2196F3 !important; }
  .bg-blue .card-header,
  .bg-blue .card-footer {
    background-color: transparent; }

.alert-blue {
  border-color: #65b6f7 !important;
  background-color: #65b6f7 !important;
  color: #05365d !important; }
  .alert-blue .alert-link {
    color: #031f36 !important; }

.bullet.bullet-blue {
  background-color: #2196F3; }

.bg-light-blue {
  background-color: rgba(33, 150, 243, 0.15); }

.border-blue {
  border-color: #2196F3; }

.bg-blue.badge-glow,
.border-blue.badge-glow {
  box-shadow: 0px 0px 10px #2196F3; }

.overlay-blue {
  background: #2196F3;
  /* The Fallback */
  background: rgba(33, 150, 243, 0.8); }

/* .card-outline-blue{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-blue {
  border-color: !important;
  background-color: #2196F3 !important;
  color: #FFFFFF; }
  .btn-blue:hover {
    border-color: #1E88E5 !important;
    background-color: #42A5F5 !important;
    color: #FFF !important; }
  .btn-blue:focus, .btn-blue:active {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important;
    color: #FFF !important; }

.btn-outline-blue {
  border-color: #2196F3;
  background-color: transparent;
  color: #2196F3; }
  .btn-outline-blue:hover {
    background-color: #2196F3;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-blue:before {
  background-color: #2196F3; }

input[type="checkbox"].bg-blue + .custom-control-label:before, input[type="radio"].bg-blue + .custom-control-label:before {
  background-color: #2196F3 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2196F3 !important; }

.border-blue {
  border: 1px solid #2196F3 !important; }

.border-top-blue {
  border-top: 1px solid #2196F3; }

.border-bottom-blue {
  border-bottom: 1px solid #2196F3; }

.border-left-blue {
  border-left: 1px solid #2196F3; }

.border-right-blue {
  border-right: 1px solid #2196F3; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #2196F3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #2196F3; }

.blue.darken-1 {
  color: #1E88E5 !important; }

.bg-blue.bg-darken-1 {
  background-color: #1E88E5 !important; }

.btn-blue.btn-darken-1 {
  border-color: #1976D2 !important;
  background-color: #1E88E5 !important; }
  .btn-blue.btn-darken-1:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-darken-1:focus, .btn-blue.btn-darken-1:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-darken-1 {
  border-color: #1E88E5 !important;
  color: #1E88E5 !important; }
  .btn-outline-blue.btn-outline-darken-1:hover {
    background-color: #1E88E5 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1E88E5 !important; }

.border-blue.border-darken-1 {
  border: 1px solid #1E88E5 !important; }

.border-top-blue.border-top-darken-1 {
  border-top: 1px solid #1E88E5 !important; }

.border-bottom-blue.border-bottom-darken-1 {
  border-bottom: 1px solid #1E88E5 !important; }

.border-left-blue.border-left-darken-1 {
  border-left: 1px solid #1E88E5 !important; }

.border-right-blue.border-right-darken-1 {
  border-right: 1px solid #1E88E5 !important; }

.overlay-blue.overlay-darken-1 {
  background: #1E88E5;
  /* The Fallback */
  background: rgba(30, 136, 229, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #1E88E5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1E88E5; }

.blue.darken-2 {
  color: #1976D2 !important; }

.bg-blue.bg-darken-2 {
  background-color: #1976D2 !important; }

.btn-blue.btn-darken-2 {
  border-color: #1976D2 !important;
  background-color: #1976D2 !important; }
  .btn-blue.btn-darken-2:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-darken-2:focus, .btn-blue.btn-darken-2:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-darken-2 {
  border-color: #1976D2 !important;
  color: #1976D2 !important; }
  .btn-outline-blue.btn-outline-darken-2:hover {
    background-color: #1976D2 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1976D2 !important; }

.border-blue.border-darken-2 {
  border: 1px solid #1976D2 !important; }

.border-top-blue.border-top-darken-2 {
  border-top: 1px solid #1976D2 !important; }

.border-bottom-blue.border-bottom-darken-2 {
  border-bottom: 1px solid #1976D2 !important; }

.border-left-blue.border-left-darken-2 {
  border-left: 1px solid #1976D2 !important; }

.border-right-blue.border-right-darken-2 {
  border-right: 1px solid #1976D2 !important; }

.overlay-blue.overlay-darken-2 {
  background: #1976D2;
  /* The Fallback */
  background: rgba(25, 118, 210, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #1976D2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1976D2; }

.blue.darken-3 {
  color: #1565C0 !important; }

.bg-blue.bg-darken-3 {
  background-color: #1565C0 !important; }

.btn-blue.btn-darken-3 {
  border-color: #1976D2 !important;
  background-color: #1565C0 !important; }
  .btn-blue.btn-darken-3:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-darken-3:focus, .btn-blue.btn-darken-3:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-darken-3 {
  border-color: #1565C0 !important;
  color: #1565C0 !important; }
  .btn-outline-blue.btn-outline-darken-3:hover {
    background-color: #1565C0 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1565C0 !important; }

.border-blue.border-darken-3 {
  border: 1px solid #1565C0 !important; }

.border-top-blue.border-top-darken-3 {
  border-top: 1px solid #1565C0 !important; }

.border-bottom-blue.border-bottom-darken-3 {
  border-bottom: 1px solid #1565C0 !important; }

.border-left-blue.border-left-darken-3 {
  border-left: 1px solid #1565C0 !important; }

.border-right-blue.border-right-darken-3 {
  border-right: 1px solid #1565C0 !important; }

.overlay-blue.overlay-darken-3 {
  background: #1565C0;
  /* The Fallback */
  background: rgba(21, 101, 192, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #1565C0; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1565C0; }

.blue.darken-4 {
  color: #0D47A1 !important; }

.bg-blue.bg-darken-4 {
  background-color: #0D47A1 !important; }

.btn-blue.btn-darken-4 {
  border-color: #1976D2 !important;
  background-color: #0D47A1 !important; }
  .btn-blue.btn-darken-4:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-darken-4:focus, .btn-blue.btn-darken-4:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-darken-4 {
  border-color: #0D47A1 !important;
  color: #0D47A1 !important; }
  .btn-outline-blue.btn-outline-darken-4:hover {
    background-color: #0D47A1 !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0D47A1 !important; }

.border-blue.border-darken-4 {
  border: 1px solid #0D47A1 !important; }

.border-top-blue.border-top-darken-4 {
  border-top: 1px solid #0D47A1 !important; }

.border-bottom-blue.border-bottom-darken-4 {
  border-bottom: 1px solid #0D47A1 !important; }

.border-left-blue.border-left-darken-4 {
  border-left: 1px solid #0D47A1 !important; }

.border-right-blue.border-right-darken-4 {
  border-right: 1px solid #0D47A1 !important; }

.overlay-blue.overlay-darken-4 {
  background: #0D47A1;
  /* The Fallback */
  background: rgba(13, 71, 161, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #0D47A1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #0D47A1; }

.blue.accent-1 {
  color: #82B1FF !important; }

.bg-blue.bg-accent-1 {
  background-color: #82B1FF !important; }

.btn-blue.btn-accent-1 {
  border-color: #1976D2 !important;
  background-color: #82B1FF !important; }
  .btn-blue.btn-accent-1:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-accent-1:focus, .btn-blue.btn-accent-1:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-accent-1 {
  border-color: #82B1FF !important;
  color: #82B1FF !important; }
  .btn-outline-blue.btn-outline-accent-1:hover {
    background-color: #82B1FF !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #82B1FF !important; }

.border-blue.border-accent-1 {
  border: 1px solid #82B1FF !important; }

.border-top-blue.border-top-accent-1 {
  border-top: 1px solid #82B1FF !important; }

.border-bottom-blue.border-bottom-accent-1 {
  border-bottom: 1px solid #82B1FF !important; }

.border-left-blue.border-left-accent-1 {
  border-left: 1px solid #82B1FF !important; }

.border-right-blue.border-right-accent-1 {
  border-right: 1px solid #82B1FF !important; }

.overlay-blue.overlay-accent-1 {
  background: #82B1FF;
  /* The Fallback */
  background: rgba(130, 177, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #82B1FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #82B1FF; }

.blue.accent-2 {
  color: #448AFF !important; }

.bg-blue.bg-accent-2 {
  background-color: #448AFF !important; }

.btn-blue.btn-accent-2 {
  border-color: #1976D2 !important;
  background-color: #448AFF !important; }
  .btn-blue.btn-accent-2:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-accent-2:focus, .btn-blue.btn-accent-2:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-accent-2 {
  border-color: #448AFF !important;
  color: #448AFF !important; }
  .btn-outline-blue.btn-outline-accent-2:hover {
    background-color: #448AFF !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #448AFF !important; }

.border-blue.border-accent-2 {
  border: 1px solid #448AFF !important; }

.border-top-blue.border-top-accent-2 {
  border-top: 1px solid #448AFF !important; }

.border-bottom-blue.border-bottom-accent-2 {
  border-bottom: 1px solid #448AFF !important; }

.border-left-blue.border-left-accent-2 {
  border-left: 1px solid #448AFF !important; }

.border-right-blue.border-right-accent-2 {
  border-right: 1px solid #448AFF !important; }

.overlay-blue.overlay-accent-2 {
  background: #448AFF;
  /* The Fallback */
  background: rgba(68, 138, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #448AFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #448AFF; }

.blue.accent-3 {
  color: #2979FF !important; }

.bg-blue.bg-accent-3 {
  background-color: #2979FF !important; }

.btn-blue.btn-accent-3 {
  border-color: #1976D2 !important;
  background-color: #2979FF !important; }
  .btn-blue.btn-accent-3:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-accent-3:focus, .btn-blue.btn-accent-3:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-accent-3 {
  border-color: #2979FF !important;
  color: #2979FF !important; }
  .btn-outline-blue.btn-outline-accent-3:hover {
    background-color: #2979FF !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2979FF !important; }

.border-blue.border-accent-3 {
  border: 1px solid #2979FF !important; }

.border-top-blue.border-top-accent-3 {
  border-top: 1px solid #2979FF !important; }

.border-bottom-blue.border-bottom-accent-3 {
  border-bottom: 1px solid #2979FF !important; }

.border-left-blue.border-left-accent-3 {
  border-left: 1px solid #2979FF !important; }

.border-right-blue.border-right-accent-3 {
  border-right: 1px solid #2979FF !important; }

.overlay-blue.overlay-accent-3 {
  background: #2979FF;
  /* The Fallback */
  background: rgba(41, 121, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #2979FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #2979FF; }

.blue.accent-4 {
  color: #2962FF !important; }

.bg-blue.bg-accent-4 {
  background-color: #2962FF !important; }

.btn-blue.btn-accent-4 {
  border-color: #1976D2 !important;
  background-color: #2962FF !important; }
  .btn-blue.btn-accent-4:hover {
    border-color: #1976D2 !important;
    background-color: #1565C0 !important; }
  .btn-blue.btn-accent-4:focus, .btn-blue.btn-accent-4:active {
    border-color: #1565C0 !important;
    background-color: #0D47A1 !important; }

.btn-outline-blue.btn-outline-accent-4 {
  border-color: #2962FF !important;
  color: #2962FF !important; }
  .btn-outline-blue.btn-outline-accent-4:hover {
    background-color: #2962FF !important; }

input:focus ~ .bg-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #2962FF !important; }

.border-blue.border-accent-4 {
  border: 1px solid #2962FF !important; }

.border-top-blue.border-top-accent-4 {
  border-top: 1px solid #2962FF !important; }

.border-bottom-blue.border-bottom-accent-4 {
  border-bottom: 1px solid #2962FF !important; }

.border-left-blue.border-left-accent-4 {
  border-left: 1px solid #2962FF !important; }

.border-right-blue.border-right-accent-4 {
  border-right: 1px solid #2962FF !important; }

.overlay-blue.overlay-accent-4 {
  background: #2962FF;
  /* The Fallback */
  background: rgba(41, 98, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue]:before {
  background-color: #2962FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #2962FF; }

.cyan.lighten-5 {
  color: #E0F7FA !important; }

.bg-cyan.bg-lighten-5 {
  background-color: #E0F7FA !important; }

.btn-cyan.btn-lighten-5 {
  border-color: #0097A7 !important;
  background-color: #E0F7FA !important; }
  .btn-cyan.btn-lighten-5:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-lighten-5:focus, .btn-cyan.btn-lighten-5:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-lighten-5 {
  border-color: #E0F7FA !important;
  color: #E0F7FA !important; }
  .btn-outline-cyan.btn-outline-lighten-5:hover {
    background-color: #E0F7FA !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E0F7FA !important; }

.border-cyan.border-lighten-5 {
  border: 1px solid #E0F7FA !important; }

.border-top-cyan.border-top-lighten-5 {
  border-top: 1px solid #E0F7FA !important; }

.border-bottom-cyan.border-bottom-lighten-5 {
  border-bottom: 1px solid #E0F7FA !important; }

.border-left-cyan.border-left-lighten-5 {
  border-left: 1px solid #E0F7FA !important; }

.border-right-cyan.border-right-lighten-5 {
  border-right: 1px solid #E0F7FA !important; }

.overlay-cyan.overlay-lighten-5 {
  background: #E0F7FA;
  /* The Fallback */
  background: rgba(224, 247, 250, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #E0F7FA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E0F7FA; }

.cyan.lighten-4 {
  color: #B2EBF2 !important; }

.bg-cyan.bg-lighten-4 {
  background-color: #B2EBF2 !important; }

.btn-cyan.btn-lighten-4 {
  border-color: #0097A7 !important;
  background-color: #B2EBF2 !important; }
  .btn-cyan.btn-lighten-4:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-lighten-4:focus, .btn-cyan.btn-lighten-4:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-lighten-4 {
  border-color: #B2EBF2 !important;
  color: #B2EBF2 !important; }
  .btn-outline-cyan.btn-outline-lighten-4:hover {
    background-color: #B2EBF2 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #B2EBF2 !important; }

.border-cyan.border-lighten-4 {
  border: 1px solid #B2EBF2 !important; }

.border-top-cyan.border-top-lighten-4 {
  border-top: 1px solid #B2EBF2 !important; }

.border-bottom-cyan.border-bottom-lighten-4 {
  border-bottom: 1px solid #B2EBF2 !important; }

.border-left-cyan.border-left-lighten-4 {
  border-left: 1px solid #B2EBF2 !important; }

.border-right-cyan.border-right-lighten-4 {
  border-right: 1px solid #B2EBF2 !important; }

.overlay-cyan.overlay-lighten-4 {
  background: #B2EBF2;
  /* The Fallback */
  background: rgba(178, 235, 242, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #B2EBF2; }

.edit-kanban-item select option.bg-color_name {
  background-color: #B2EBF2; }

.cyan.lighten-3 {
  color: #80DEEA !important; }

.bg-cyan.bg-lighten-3 {
  background-color: #80DEEA !important; }

.btn-cyan.btn-lighten-3 {
  border-color: #0097A7 !important;
  background-color: #80DEEA !important; }
  .btn-cyan.btn-lighten-3:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-lighten-3:focus, .btn-cyan.btn-lighten-3:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-lighten-3 {
  border-color: #80DEEA !important;
  color: #80DEEA !important; }
  .btn-outline-cyan.btn-outline-lighten-3:hover {
    background-color: #80DEEA !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #80DEEA !important; }

.border-cyan.border-lighten-3 {
  border: 1px solid #80DEEA !important; }

.border-top-cyan.border-top-lighten-3 {
  border-top: 1px solid #80DEEA !important; }

.border-bottom-cyan.border-bottom-lighten-3 {
  border-bottom: 1px solid #80DEEA !important; }

.border-left-cyan.border-left-lighten-3 {
  border-left: 1px solid #80DEEA !important; }

.border-right-cyan.border-right-lighten-3 {
  border-right: 1px solid #80DEEA !important; }

.overlay-cyan.overlay-lighten-3 {
  background: #80DEEA;
  /* The Fallback */
  background: rgba(128, 222, 234, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #80DEEA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #80DEEA; }

.cyan.lighten-2 {
  color: #4DD0E1 !important; }

.bg-cyan.bg-lighten-2 {
  background-color: #4DD0E1 !important; }

.btn-cyan.btn-lighten-2 {
  border-color: #0097A7 !important;
  background-color: #4DD0E1 !important; }
  .btn-cyan.btn-lighten-2:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-lighten-2:focus, .btn-cyan.btn-lighten-2:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-lighten-2 {
  border-color: #4DD0E1 !important;
  color: #4DD0E1 !important; }
  .btn-outline-cyan.btn-outline-lighten-2:hover {
    background-color: #4DD0E1 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4DD0E1 !important; }

.border-cyan.border-lighten-2 {
  border: 1px solid #4DD0E1 !important; }

.border-top-cyan.border-top-lighten-2 {
  border-top: 1px solid #4DD0E1 !important; }

.border-bottom-cyan.border-bottom-lighten-2 {
  border-bottom: 1px solid #4DD0E1 !important; }

.border-left-cyan.border-left-lighten-2 {
  border-left: 1px solid #4DD0E1 !important; }

.border-right-cyan.border-right-lighten-2 {
  border-right: 1px solid #4DD0E1 !important; }

.overlay-cyan.overlay-lighten-2 {
  background: #4DD0E1;
  /* The Fallback */
  background: rgba(77, 208, 225, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #4DD0E1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #4DD0E1; }

.cyan.lighten-1 {
  color: #26C6DA !important; }

.bg-cyan.bg-lighten-1 {
  background-color: #26C6DA !important; }

.btn-cyan.btn-lighten-1 {
  border-color: #0097A7 !important;
  background-color: #26C6DA !important; }
  .btn-cyan.btn-lighten-1:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-lighten-1:focus, .btn-cyan.btn-lighten-1:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-lighten-1 {
  border-color: #26C6DA !important;
  color: #26C6DA !important; }
  .btn-outline-cyan.btn-outline-lighten-1:hover {
    background-color: #26C6DA !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #26C6DA !important; }

.border-cyan.border-lighten-1 {
  border: 1px solid #26C6DA !important; }

.border-top-cyan.border-top-lighten-1 {
  border-top: 1px solid #26C6DA !important; }

.border-bottom-cyan.border-bottom-lighten-1 {
  border-bottom: 1px solid #26C6DA !important; }

.border-left-cyan.border-left-lighten-1 {
  border-left: 1px solid #26C6DA !important; }

.border-right-cyan.border-right-lighten-1 {
  border-right: 1px solid #26C6DA !important; }

.overlay-cyan.overlay-lighten-1 {
  background: #26C6DA;
  /* The Fallback */
  background: rgba(38, 198, 218, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #26C6DA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #26C6DA; }

.cyan {
  color: #00BCD4 !important; }

.bg-cyan {
  background-color: #00BCD4 !important; }
  .bg-cyan .card-header,
  .bg-cyan .card-footer {
    background-color: transparent; }

.alert-cyan {
  border-color: #1ce5ff !important;
  background-color: #1ce5ff !important;
  color: #001e22 !important; }
  .alert-cyan .alert-link {
    color: black !important; }

.bullet.bullet-cyan {
  background-color: #00BCD4; }

.bg-light-cyan {
  background-color: rgba(0, 188, 212, 0.15); }

.border-cyan {
  border-color: #00BCD4; }

.bg-cyan.badge-glow,
.border-cyan.badge-glow {
  box-shadow: 0px 0px 10px #00BCD4; }

.overlay-cyan {
  background: #00BCD4;
  /* The Fallback */
  background: rgba(0, 188, 212, 0.8); }

/* .card-outline-cyan{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-cyan {
  border-color: !important;
  background-color: #00BCD4 !important;
  color: #FFFFFF; }
  .btn-cyan:hover {
    border-color: #00ACC1 !important;
    background-color: #26C6DA !important;
    color: #FFF !important; }
  .btn-cyan:focus, .btn-cyan:active {
    border-color: #0097A7 !important;
    background-color: #00838F !important;
    color: #FFF !important; }

.btn-outline-cyan {
  border-color: #00BCD4;
  background-color: transparent;
  color: #00BCD4; }
  .btn-outline-cyan:hover {
    background-color: #00BCD4;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-cyan:before {
  background-color: #00BCD4; }

input[type="checkbox"].bg-cyan + .custom-control-label:before, input[type="radio"].bg-cyan + .custom-control-label:before {
  background-color: #00BCD4 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00BCD4 !important; }

.border-cyan {
  border: 1px solid #00BCD4 !important; }

.border-top-cyan {
  border-top: 1px solid #00BCD4; }

.border-bottom-cyan {
  border-bottom: 1px solid #00BCD4; }

.border-left-cyan {
  border-left: 1px solid #00BCD4; }

.border-right-cyan {
  border-right: 1px solid #00BCD4; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #00BCD4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00BCD4; }

.cyan.darken-1 {
  color: #00ACC1 !important; }

.bg-cyan.bg-darken-1 {
  background-color: #00ACC1 !important; }

.btn-cyan.btn-darken-1 {
  border-color: #0097A7 !important;
  background-color: #00ACC1 !important; }
  .btn-cyan.btn-darken-1:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-darken-1:focus, .btn-cyan.btn-darken-1:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-darken-1 {
  border-color: #00ACC1 !important;
  color: #00ACC1 !important; }
  .btn-outline-cyan.btn-outline-darken-1:hover {
    background-color: #00ACC1 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00ACC1 !important; }

.border-cyan.border-darken-1 {
  border: 1px solid #00ACC1 !important; }

.border-top-cyan.border-top-darken-1 {
  border-top: 1px solid #00ACC1 !important; }

.border-bottom-cyan.border-bottom-darken-1 {
  border-bottom: 1px solid #00ACC1 !important; }

.border-left-cyan.border-left-darken-1 {
  border-left: 1px solid #00ACC1 !important; }

.border-right-cyan.border-right-darken-1 {
  border-right: 1px solid #00ACC1 !important; }

.overlay-cyan.overlay-darken-1 {
  background: #00ACC1;
  /* The Fallback */
  background: rgba(0, 172, 193, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #00ACC1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00ACC1; }

.cyan.darken-2 {
  color: #0097A7 !important; }

.bg-cyan.bg-darken-2 {
  background-color: #0097A7 !important; }

.btn-cyan.btn-darken-2 {
  border-color: #0097A7 !important;
  background-color: #0097A7 !important; }
  .btn-cyan.btn-darken-2:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-darken-2:focus, .btn-cyan.btn-darken-2:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-darken-2 {
  border-color: #0097A7 !important;
  color: #0097A7 !important; }
  .btn-outline-cyan.btn-outline-darken-2:hover {
    background-color: #0097A7 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #0097A7 !important; }

.border-cyan.border-darken-2 {
  border: 1px solid #0097A7 !important; }

.border-top-cyan.border-top-darken-2 {
  border-top: 1px solid #0097A7 !important; }

.border-bottom-cyan.border-bottom-darken-2 {
  border-bottom: 1px solid #0097A7 !important; }

.border-left-cyan.border-left-darken-2 {
  border-left: 1px solid #0097A7 !important; }

.border-right-cyan.border-right-darken-2 {
  border-right: 1px solid #0097A7 !important; }

.overlay-cyan.overlay-darken-2 {
  background: #0097A7;
  /* The Fallback */
  background: rgba(0, 151, 167, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #0097A7; }

.edit-kanban-item select option.bg-color_name {
  background-color: #0097A7; }

.cyan.darken-3 {
  color: #00838F !important; }

.bg-cyan.bg-darken-3 {
  background-color: #00838F !important; }

.btn-cyan.btn-darken-3 {
  border-color: #0097A7 !important;
  background-color: #00838F !important; }
  .btn-cyan.btn-darken-3:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-darken-3:focus, .btn-cyan.btn-darken-3:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-darken-3 {
  border-color: #00838F !important;
  color: #00838F !important; }
  .btn-outline-cyan.btn-outline-darken-3:hover {
    background-color: #00838F !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00838F !important; }

.border-cyan.border-darken-3 {
  border: 1px solid #00838F !important; }

.border-top-cyan.border-top-darken-3 {
  border-top: 1px solid #00838F !important; }

.border-bottom-cyan.border-bottom-darken-3 {
  border-bottom: 1px solid #00838F !important; }

.border-left-cyan.border-left-darken-3 {
  border-left: 1px solid #00838F !important; }

.border-right-cyan.border-right-darken-3 {
  border-right: 1px solid #00838F !important; }

.overlay-cyan.overlay-darken-3 {
  background: #00838F;
  /* The Fallback */
  background: rgba(0, 131, 143, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #00838F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00838F; }

.cyan.darken-4 {
  color: #006064 !important; }

.bg-cyan.bg-darken-4 {
  background-color: #006064 !important; }

.btn-cyan.btn-darken-4 {
  border-color: #0097A7 !important;
  background-color: #006064 !important; }
  .btn-cyan.btn-darken-4:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-darken-4:focus, .btn-cyan.btn-darken-4:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-darken-4 {
  border-color: #006064 !important;
  color: #006064 !important; }
  .btn-outline-cyan.btn-outline-darken-4:hover {
    background-color: #006064 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #006064 !important; }

.border-cyan.border-darken-4 {
  border: 1px solid #006064 !important; }

.border-top-cyan.border-top-darken-4 {
  border-top: 1px solid #006064 !important; }

.border-bottom-cyan.border-bottom-darken-4 {
  border-bottom: 1px solid #006064 !important; }

.border-left-cyan.border-left-darken-4 {
  border-left: 1px solid #006064 !important; }

.border-right-cyan.border-right-darken-4 {
  border-right: 1px solid #006064 !important; }

.overlay-cyan.overlay-darken-4 {
  background: #006064;
  /* The Fallback */
  background: rgba(0, 96, 100, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #006064; }

.edit-kanban-item select option.bg-color_name {
  background-color: #006064; }

.cyan.accent-1 {
  color: #84FFFF !important; }

.bg-cyan.bg-accent-1 {
  background-color: #84FFFF !important; }

.btn-cyan.btn-accent-1 {
  border-color: #0097A7 !important;
  background-color: #84FFFF !important; }
  .btn-cyan.btn-accent-1:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-accent-1:focus, .btn-cyan.btn-accent-1:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-accent-1 {
  border-color: #84FFFF !important;
  color: #84FFFF !important; }
  .btn-outline-cyan.btn-outline-accent-1:hover {
    background-color: #84FFFF !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #84FFFF !important; }

.border-cyan.border-accent-1 {
  border: 1px solid #84FFFF !important; }

.border-top-cyan.border-top-accent-1 {
  border-top: 1px solid #84FFFF !important; }

.border-bottom-cyan.border-bottom-accent-1 {
  border-bottom: 1px solid #84FFFF !important; }

.border-left-cyan.border-left-accent-1 {
  border-left: 1px solid #84FFFF !important; }

.border-right-cyan.border-right-accent-1 {
  border-right: 1px solid #84FFFF !important; }

.overlay-cyan.overlay-accent-1 {
  background: #84FFFF;
  /* The Fallback */
  background: rgba(132, 255, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #84FFFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #84FFFF; }

.cyan.accent-2 {
  color: #18FFFF !important; }

.bg-cyan.bg-accent-2 {
  background-color: #18FFFF !important; }

.btn-cyan.btn-accent-2 {
  border-color: #0097A7 !important;
  background-color: #18FFFF !important; }
  .btn-cyan.btn-accent-2:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-accent-2:focus, .btn-cyan.btn-accent-2:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-accent-2 {
  border-color: #18FFFF !important;
  color: #18FFFF !important; }
  .btn-outline-cyan.btn-outline-accent-2:hover {
    background-color: #18FFFF !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #18FFFF !important; }

.border-cyan.border-accent-2 {
  border: 1px solid #18FFFF !important; }

.border-top-cyan.border-top-accent-2 {
  border-top: 1px solid #18FFFF !important; }

.border-bottom-cyan.border-bottom-accent-2 {
  border-bottom: 1px solid #18FFFF !important; }

.border-left-cyan.border-left-accent-2 {
  border-left: 1px solid #18FFFF !important; }

.border-right-cyan.border-right-accent-2 {
  border-right: 1px solid #18FFFF !important; }

.overlay-cyan.overlay-accent-2 {
  background: #18FFFF;
  /* The Fallback */
  background: rgba(24, 255, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #18FFFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #18FFFF; }

.cyan.accent-3 {
  color: #00E5FF !important; }

.bg-cyan.bg-accent-3 {
  background-color: #00E5FF !important; }

.btn-cyan.btn-accent-3 {
  border-color: #0097A7 !important;
  background-color: #00E5FF !important; }
  .btn-cyan.btn-accent-3:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-accent-3:focus, .btn-cyan.btn-accent-3:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-accent-3 {
  border-color: #00E5FF !important;
  color: #00E5FF !important; }
  .btn-outline-cyan.btn-outline-accent-3:hover {
    background-color: #00E5FF !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00E5FF !important; }

.border-cyan.border-accent-3 {
  border: 1px solid #00E5FF !important; }

.border-top-cyan.border-top-accent-3 {
  border-top: 1px solid #00E5FF !important; }

.border-bottom-cyan.border-bottom-accent-3 {
  border-bottom: 1px solid #00E5FF !important; }

.border-left-cyan.border-left-accent-3 {
  border-left: 1px solid #00E5FF !important; }

.border-right-cyan.border-right-accent-3 {
  border-right: 1px solid #00E5FF !important; }

.overlay-cyan.overlay-accent-3 {
  background: #00E5FF;
  /* The Fallback */
  background: rgba(0, 229, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #00E5FF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00E5FF; }

.cyan.accent-4 {
  color: #00B8D4 !important; }

.bg-cyan.bg-accent-4 {
  background-color: #00B8D4 !important; }

.btn-cyan.btn-accent-4 {
  border-color: #0097A7 !important;
  background-color: #00B8D4 !important; }
  .btn-cyan.btn-accent-4:hover {
    border-color: #0097A7 !important;
    background-color: #00838F !important; }
  .btn-cyan.btn-accent-4:focus, .btn-cyan.btn-accent-4:active {
    border-color: #00838F !important;
    background-color: #006064 !important; }

.btn-outline-cyan.btn-outline-accent-4 {
  border-color: #00B8D4 !important;
  color: #00B8D4 !important; }
  .btn-outline-cyan.btn-outline-accent-4:hover {
    background-color: #00B8D4 !important; }

input:focus ~ .bg-cyan {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00B8D4 !important; }

.border-cyan.border-accent-4 {
  border: 1px solid #00B8D4 !important; }

.border-top-cyan.border-top-accent-4 {
  border-top: 1px solid #00B8D4 !important; }

.border-bottom-cyan.border-bottom-accent-4 {
  border-bottom: 1px solid #00B8D4 !important; }

.border-left-cyan.border-left-accent-4 {
  border-left: 1px solid #00B8D4 !important; }

.border-right-cyan.border-right-accent-4 {
  border-right: 1px solid #00B8D4 !important; }

.overlay-cyan.overlay-accent-4 {
  background: #00B8D4;
  /* The Fallback */
  background: rgba(0, 184, 212, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=cyan]:before {
  background-color: #00B8D4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00B8D4; }

.teal.lighten-5 {
  color: #E0F2F1 !important; }

.bg-teal.bg-lighten-5 {
  background-color: #E0F2F1 !important; }

.btn-teal.btn-lighten-5 {
  border-color: #00796B !important;
  background-color: #E0F2F1 !important; }
  .btn-teal.btn-lighten-5:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-lighten-5:focus, .btn-teal.btn-lighten-5:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-lighten-5 {
  border-color: #E0F2F1 !important;
  color: #E0F2F1 !important; }
  .btn-outline-teal.btn-outline-lighten-5:hover {
    background-color: #E0F2F1 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #E0F2F1 !important; }

.border-teal.border-lighten-5 {
  border: 1px solid #E0F2F1 !important; }

.border-top-teal.border-top-lighten-5 {
  border-top: 1px solid #E0F2F1 !important; }

.border-bottom-teal.border-bottom-lighten-5 {
  border-bottom: 1px solid #E0F2F1 !important; }

.border-left-teal.border-left-lighten-5 {
  border-left: 1px solid #E0F2F1 !important; }

.border-right-teal.border-right-lighten-5 {
  border-right: 1px solid #E0F2F1 !important; }

.overlay-teal.overlay-lighten-5 {
  background: #E0F2F1;
  /* The Fallback */
  background: rgba(224, 242, 241, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #E0F2F1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #E0F2F1; }

.teal.lighten-4 {
  color: #B2DFDB !important; }

.bg-teal.bg-lighten-4 {
  background-color: #B2DFDB !important; }

.btn-teal.btn-lighten-4 {
  border-color: #00796B !important;
  background-color: #B2DFDB !important; }
  .btn-teal.btn-lighten-4:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-lighten-4:focus, .btn-teal.btn-lighten-4:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-lighten-4 {
  border-color: #B2DFDB !important;
  color: #B2DFDB !important; }
  .btn-outline-teal.btn-outline-lighten-4:hover {
    background-color: #B2DFDB !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #B2DFDB !important; }

.border-teal.border-lighten-4 {
  border: 1px solid #B2DFDB !important; }

.border-top-teal.border-top-lighten-4 {
  border-top: 1px solid #B2DFDB !important; }

.border-bottom-teal.border-bottom-lighten-4 {
  border-bottom: 1px solid #B2DFDB !important; }

.border-left-teal.border-left-lighten-4 {
  border-left: 1px solid #B2DFDB !important; }

.border-right-teal.border-right-lighten-4 {
  border-right: 1px solid #B2DFDB !important; }

.overlay-teal.overlay-lighten-4 {
  background: #B2DFDB;
  /* The Fallback */
  background: rgba(178, 223, 219, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #B2DFDB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #B2DFDB; }

.teal.lighten-3 {
  color: #80CBC4 !important; }

.bg-teal.bg-lighten-3 {
  background-color: #80CBC4 !important; }

.btn-teal.btn-lighten-3 {
  border-color: #00796B !important;
  background-color: #80CBC4 !important; }
  .btn-teal.btn-lighten-3:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-lighten-3:focus, .btn-teal.btn-lighten-3:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-lighten-3 {
  border-color: #80CBC4 !important;
  color: #80CBC4 !important; }
  .btn-outline-teal.btn-outline-lighten-3:hover {
    background-color: #80CBC4 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #80CBC4 !important; }

.border-teal.border-lighten-3 {
  border: 1px solid #80CBC4 !important; }

.border-top-teal.border-top-lighten-3 {
  border-top: 1px solid #80CBC4 !important; }

.border-bottom-teal.border-bottom-lighten-3 {
  border-bottom: 1px solid #80CBC4 !important; }

.border-left-teal.border-left-lighten-3 {
  border-left: 1px solid #80CBC4 !important; }

.border-right-teal.border-right-lighten-3 {
  border-right: 1px solid #80CBC4 !important; }

.overlay-teal.overlay-lighten-3 {
  background: #80CBC4;
  /* The Fallback */
  background: rgba(128, 203, 196, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #80CBC4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #80CBC4; }

.teal.lighten-2 {
  color: #4DB6AC !important; }

.bg-teal.bg-lighten-2 {
  background-color: #4DB6AC !important; }

.btn-teal.btn-lighten-2 {
  border-color: #00796B !important;
  background-color: #4DB6AC !important; }
  .btn-teal.btn-lighten-2:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-lighten-2:focus, .btn-teal.btn-lighten-2:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-lighten-2 {
  border-color: #4DB6AC !important;
  color: #4DB6AC !important; }
  .btn-outline-teal.btn-outline-lighten-2:hover {
    background-color: #4DB6AC !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #4DB6AC !important; }

.border-teal.border-lighten-2 {
  border: 1px solid #4DB6AC !important; }

.border-top-teal.border-top-lighten-2 {
  border-top: 1px solid #4DB6AC !important; }

.border-bottom-teal.border-bottom-lighten-2 {
  border-bottom: 1px solid #4DB6AC !important; }

.border-left-teal.border-left-lighten-2 {
  border-left: 1px solid #4DB6AC !important; }

.border-right-teal.border-right-lighten-2 {
  border-right: 1px solid #4DB6AC !important; }

.overlay-teal.overlay-lighten-2 {
  background: #4DB6AC;
  /* The Fallback */
  background: rgba(77, 182, 172, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #4DB6AC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #4DB6AC; }

.teal.lighten-1 {
  color: #26A69A !important; }

.bg-teal.bg-lighten-1 {
  background-color: #26A69A !important; }

.btn-teal.btn-lighten-1 {
  border-color: #00796B !important;
  background-color: #26A69A !important; }
  .btn-teal.btn-lighten-1:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-lighten-1:focus, .btn-teal.btn-lighten-1:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-lighten-1 {
  border-color: #26A69A !important;
  color: #26A69A !important; }
  .btn-outline-teal.btn-outline-lighten-1:hover {
    background-color: #26A69A !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #26A69A !important; }

.border-teal.border-lighten-1 {
  border: 1px solid #26A69A !important; }

.border-top-teal.border-top-lighten-1 {
  border-top: 1px solid #26A69A !important; }

.border-bottom-teal.border-bottom-lighten-1 {
  border-bottom: 1px solid #26A69A !important; }

.border-left-teal.border-left-lighten-1 {
  border-left: 1px solid #26A69A !important; }

.border-right-teal.border-right-lighten-1 {
  border-right: 1px solid #26A69A !important; }

.overlay-teal.overlay-lighten-1 {
  background: #26A69A;
  /* The Fallback */
  background: rgba(38, 166, 154, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #26A69A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #26A69A; }

.teal {
  color: #009688 !important; }

.bg-teal {
  background-color: #009688 !important; }
  .bg-teal .card-header,
  .bg-teal .card-footer {
    background-color: transparent; }

.alert-teal {
  border-color: #00ddc9 !important;
  background-color: #00ddc9 !important;
  color: black !important; }
  .alert-teal .alert-link {
    color: black !important; }

.bullet.bullet-teal {
  background-color: #009688; }

.bg-light-teal {
  background-color: rgba(0, 150, 136, 0.15); }

.border-teal {
  border-color: #009688; }

.bg-teal.badge-glow,
.border-teal.badge-glow {
  box-shadow: 0px 0px 10px #009688; }

.overlay-teal {
  background: #009688;
  /* The Fallback */
  background: rgba(0, 150, 136, 0.8); }

/* .card-outline-teal{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-teal {
  border-color: !important;
  background-color: #009688 !important;
  color: #FFFFFF; }
  .btn-teal:hover {
    border-color: #00897B !important;
    background-color: #26A69A !important;
    color: #FFF !important; }
  .btn-teal:focus, .btn-teal:active {
    border-color: #00796B !important;
    background-color: #00695C !important;
    color: #FFF !important; }

.btn-outline-teal {
  border-color: #009688;
  background-color: transparent;
  color: #009688; }
  .btn-outline-teal:hover {
    background-color: #009688;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-teal:before {
  background-color: #009688; }

input[type="checkbox"].bg-teal + .custom-control-label:before, input[type="radio"].bg-teal + .custom-control-label:before {
  background-color: #009688 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #009688 !important; }

.border-teal {
  border: 1px solid #009688 !important; }

.border-top-teal {
  border-top: 1px solid #009688; }

.border-bottom-teal {
  border-bottom: 1px solid #009688; }

.border-left-teal {
  border-left: 1px solid #009688; }

.border-right-teal {
  border-right: 1px solid #009688; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #009688; }

.edit-kanban-item select option.bg-color_name {
  background-color: #009688; }

.teal.darken-1 {
  color: #00897B !important; }

.bg-teal.bg-darken-1 {
  background-color: #00897B !important; }

.btn-teal.btn-darken-1 {
  border-color: #00796B !important;
  background-color: #00897B !important; }
  .btn-teal.btn-darken-1:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-darken-1:focus, .btn-teal.btn-darken-1:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-darken-1 {
  border-color: #00897B !important;
  color: #00897B !important; }
  .btn-outline-teal.btn-outline-darken-1:hover {
    background-color: #00897B !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00897B !important; }

.border-teal.border-darken-1 {
  border: 1px solid #00897B !important; }

.border-top-teal.border-top-darken-1 {
  border-top: 1px solid #00897B !important; }

.border-bottom-teal.border-bottom-darken-1 {
  border-bottom: 1px solid #00897B !important; }

.border-left-teal.border-left-darken-1 {
  border-left: 1px solid #00897B !important; }

.border-right-teal.border-right-darken-1 {
  border-right: 1px solid #00897B !important; }

.overlay-teal.overlay-darken-1 {
  background: #00897B;
  /* The Fallback */
  background: rgba(0, 137, 123, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #00897B; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00897B; }

.teal.darken-2 {
  color: #00796B !important; }

.bg-teal.bg-darken-2 {
  background-color: #00796B !important; }

.btn-teal.btn-darken-2 {
  border-color: #00796B !important;
  background-color: #00796B !important; }
  .btn-teal.btn-darken-2:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-darken-2:focus, .btn-teal.btn-darken-2:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-darken-2 {
  border-color: #00796B !important;
  color: #00796B !important; }
  .btn-outline-teal.btn-outline-darken-2:hover {
    background-color: #00796B !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00796B !important; }

.border-teal.border-darken-2 {
  border: 1px solid #00796B !important; }

.border-top-teal.border-top-darken-2 {
  border-top: 1px solid #00796B !important; }

.border-bottom-teal.border-bottom-darken-2 {
  border-bottom: 1px solid #00796B !important; }

.border-left-teal.border-left-darken-2 {
  border-left: 1px solid #00796B !important; }

.border-right-teal.border-right-darken-2 {
  border-right: 1px solid #00796B !important; }

.overlay-teal.overlay-darken-2 {
  background: #00796B;
  /* The Fallback */
  background: rgba(0, 121, 107, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #00796B; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00796B; }

.teal.darken-3 {
  color: #00695C !important; }

.bg-teal.bg-darken-3 {
  background-color: #00695C !important; }

.btn-teal.btn-darken-3 {
  border-color: #00796B !important;
  background-color: #00695C !important; }
  .btn-teal.btn-darken-3:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-darken-3:focus, .btn-teal.btn-darken-3:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-darken-3 {
  border-color: #00695C !important;
  color: #00695C !important; }
  .btn-outline-teal.btn-outline-darken-3:hover {
    background-color: #00695C !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00695C !important; }

.border-teal.border-darken-3 {
  border: 1px solid #00695C !important; }

.border-top-teal.border-top-darken-3 {
  border-top: 1px solid #00695C !important; }

.border-bottom-teal.border-bottom-darken-3 {
  border-bottom: 1px solid #00695C !important; }

.border-left-teal.border-left-darken-3 {
  border-left: 1px solid #00695C !important; }

.border-right-teal.border-right-darken-3 {
  border-right: 1px solid #00695C !important; }

.overlay-teal.overlay-darken-3 {
  background: #00695C;
  /* The Fallback */
  background: rgba(0, 105, 92, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #00695C; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00695C; }

.teal.darken-4 {
  color: #004D40 !important; }

.bg-teal.bg-darken-4 {
  background-color: #004D40 !important; }

.btn-teal.btn-darken-4 {
  border-color: #00796B !important;
  background-color: #004D40 !important; }
  .btn-teal.btn-darken-4:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-darken-4:focus, .btn-teal.btn-darken-4:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-darken-4 {
  border-color: #004D40 !important;
  color: #004D40 !important; }
  .btn-outline-teal.btn-outline-darken-4:hover {
    background-color: #004D40 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #004D40 !important; }

.border-teal.border-darken-4 {
  border: 1px solid #004D40 !important; }

.border-top-teal.border-top-darken-4 {
  border-top: 1px solid #004D40 !important; }

.border-bottom-teal.border-bottom-darken-4 {
  border-bottom: 1px solid #004D40 !important; }

.border-left-teal.border-left-darken-4 {
  border-left: 1px solid #004D40 !important; }

.border-right-teal.border-right-darken-4 {
  border-right: 1px solid #004D40 !important; }

.overlay-teal.overlay-darken-4 {
  background: #004D40;
  /* The Fallback */
  background: rgba(0, 77, 64, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #004D40; }

.edit-kanban-item select option.bg-color_name {
  background-color: #004D40; }

.teal.accent-1 {
  color: #A7FFEB !important; }

.bg-teal.bg-accent-1 {
  background-color: #A7FFEB !important; }

.btn-teal.btn-accent-1 {
  border-color: #00796B !important;
  background-color: #A7FFEB !important; }
  .btn-teal.btn-accent-1:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-accent-1:focus, .btn-teal.btn-accent-1:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-accent-1 {
  border-color: #A7FFEB !important;
  color: #A7FFEB !important; }
  .btn-outline-teal.btn-outline-accent-1:hover {
    background-color: #A7FFEB !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #A7FFEB !important; }

.border-teal.border-accent-1 {
  border: 1px solid #A7FFEB !important; }

.border-top-teal.border-top-accent-1 {
  border-top: 1px solid #A7FFEB !important; }

.border-bottom-teal.border-bottom-accent-1 {
  border-bottom: 1px solid #A7FFEB !important; }

.border-left-teal.border-left-accent-1 {
  border-left: 1px solid #A7FFEB !important; }

.border-right-teal.border-right-accent-1 {
  border-right: 1px solid #A7FFEB !important; }

.overlay-teal.overlay-accent-1 {
  background: #A7FFEB;
  /* The Fallback */
  background: rgba(167, 255, 235, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #A7FFEB; }

.edit-kanban-item select option.bg-color_name {
  background-color: #A7FFEB; }

.teal.accent-2 {
  color: #64FFDA !important; }

.bg-teal.bg-accent-2 {
  background-color: #64FFDA !important; }

.btn-teal.btn-accent-2 {
  border-color: #00796B !important;
  background-color: #64FFDA !important; }
  .btn-teal.btn-accent-2:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-accent-2:focus, .btn-teal.btn-accent-2:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-accent-2 {
  border-color: #64FFDA !important;
  color: #64FFDA !important; }
  .btn-outline-teal.btn-outline-accent-2:hover {
    background-color: #64FFDA !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #64FFDA !important; }

.border-teal.border-accent-2 {
  border: 1px solid #64FFDA !important; }

.border-top-teal.border-top-accent-2 {
  border-top: 1px solid #64FFDA !important; }

.border-bottom-teal.border-bottom-accent-2 {
  border-bottom: 1px solid #64FFDA !important; }

.border-left-teal.border-left-accent-2 {
  border-left: 1px solid #64FFDA !important; }

.border-right-teal.border-right-accent-2 {
  border-right: 1px solid #64FFDA !important; }

.overlay-teal.overlay-accent-2 {
  background: #64FFDA;
  /* The Fallback */
  background: rgba(100, 255, 218, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #64FFDA; }

.edit-kanban-item select option.bg-color_name {
  background-color: #64FFDA; }

.teal.accent-3 {
  color: #1DE9B6 !important; }

.bg-teal.bg-accent-3 {
  background-color: #1DE9B6 !important; }

.btn-teal.btn-accent-3 {
  border-color: #00796B !important;
  background-color: #1DE9B6 !important; }
  .btn-teal.btn-accent-3:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-accent-3:focus, .btn-teal.btn-accent-3:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-accent-3 {
  border-color: #1DE9B6 !important;
  color: #1DE9B6 !important; }
  .btn-outline-teal.btn-outline-accent-3:hover {
    background-color: #1DE9B6 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1DE9B6 !important; }

.border-teal.border-accent-3 {
  border: 1px solid #1DE9B6 !important; }

.border-top-teal.border-top-accent-3 {
  border-top: 1px solid #1DE9B6 !important; }

.border-bottom-teal.border-bottom-accent-3 {
  border-bottom: 1px solid #1DE9B6 !important; }

.border-left-teal.border-left-accent-3 {
  border-left: 1px solid #1DE9B6 !important; }

.border-right-teal.border-right-accent-3 {
  border-right: 1px solid #1DE9B6 !important; }

.overlay-teal.overlay-accent-3 {
  background: #1DE9B6;
  /* The Fallback */
  background: rgba(29, 233, 182, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #1DE9B6; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1DE9B6; }

.teal.accent-4 {
  color: #00BFA5 !important; }

.bg-teal.bg-accent-4 {
  background-color: #00BFA5 !important; }

.btn-teal.btn-accent-4 {
  border-color: #00796B !important;
  background-color: #00BFA5 !important; }
  .btn-teal.btn-accent-4:hover {
    border-color: #00796B !important;
    background-color: #00695C !important; }
  .btn-teal.btn-accent-4:focus, .btn-teal.btn-accent-4:active {
    border-color: #00695C !important;
    background-color: #004D40 !important; }

.btn-outline-teal.btn-outline-accent-4 {
  border-color: #00BFA5 !important;
  color: #00BFA5 !important; }
  .btn-outline-teal.btn-outline-accent-4:hover {
    background-color: #00BFA5 !important; }

input:focus ~ .bg-teal {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #00BFA5 !important; }

.border-teal.border-accent-4 {
  border: 1px solid #00BFA5 !important; }

.border-top-teal.border-top-accent-4 {
  border-top: 1px solid #00BFA5 !important; }

.border-bottom-teal.border-bottom-accent-4 {
  border-bottom: 1px solid #00BFA5 !important; }

.border-left-teal.border-left-accent-4 {
  border-left: 1px solid #00BFA5 !important; }

.border-right-teal.border-right-accent-4 {
  border-right: 1px solid #00BFA5 !important; }

.overlay-teal.overlay-accent-4 {
  background: #00BFA5;
  /* The Fallback */
  background: rgba(0, 191, 165, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=teal]:before {
  background-color: #00BFA5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #00BFA5; }

.yellow.lighten-5 {
  color: #FFFDE7 !important; }

.bg-yellow.bg-lighten-5 {
  background-color: #FFFDE7 !important; }

.btn-yellow.btn-lighten-5 {
  border-color: #FBC02D !important;
  background-color: #FFFDE7 !important; }
  .btn-yellow.btn-lighten-5:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-lighten-5:focus, .btn-yellow.btn-lighten-5:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-lighten-5 {
  border-color: #FFFDE7 !important;
  color: #FFFDE7 !important; }
  .btn-outline-yellow.btn-outline-lighten-5:hover {
    background-color: #FFFDE7 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFDE7 !important; }

.border-yellow.border-lighten-5 {
  border: 1px solid #FFFDE7 !important; }

.border-top-yellow.border-top-lighten-5 {
  border-top: 1px solid #FFFDE7 !important; }

.border-bottom-yellow.border-bottom-lighten-5 {
  border-bottom: 1px solid #FFFDE7 !important; }

.border-left-yellow.border-left-lighten-5 {
  border-left: 1px solid #FFFDE7 !important; }

.border-right-yellow.border-right-lighten-5 {
  border-right: 1px solid #FFFDE7 !important; }

.overlay-yellow.overlay-lighten-5 {
  background: #FFFDE7;
  /* The Fallback */
  background: rgba(255, 253, 231, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFFDE7; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFFDE7; }

.yellow.lighten-4 {
  color: #FFF9C4 !important; }

.bg-yellow.bg-lighten-4 {
  background-color: #FFF9C4 !important; }

.btn-yellow.btn-lighten-4 {
  border-color: #FBC02D !important;
  background-color: #FFF9C4 !important; }
  .btn-yellow.btn-lighten-4:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-lighten-4:focus, .btn-yellow.btn-lighten-4:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-lighten-4 {
  border-color: #FFF9C4 !important;
  color: #FFF9C4 !important; }
  .btn-outline-yellow.btn-outline-lighten-4:hover {
    background-color: #FFF9C4 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF9C4 !important; }

.border-yellow.border-lighten-4 {
  border: 1px solid #FFF9C4 !important; }

.border-top-yellow.border-top-lighten-4 {
  border-top: 1px solid #FFF9C4 !important; }

.border-bottom-yellow.border-bottom-lighten-4 {
  border-bottom: 1px solid #FFF9C4 !important; }

.border-left-yellow.border-left-lighten-4 {
  border-left: 1px solid #FFF9C4 !important; }

.border-right-yellow.border-right-lighten-4 {
  border-right: 1px solid #FFF9C4 !important; }

.overlay-yellow.overlay-lighten-4 {
  background: #FFF9C4;
  /* The Fallback */
  background: rgba(255, 249, 196, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFF9C4; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF9C4; }

.yellow.lighten-3 {
  color: #FFF59D !important; }

.bg-yellow.bg-lighten-3 {
  background-color: #FFF59D !important; }

.btn-yellow.btn-lighten-3 {
  border-color: #FBC02D !important;
  background-color: #FFF59D !important; }
  .btn-yellow.btn-lighten-3:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-lighten-3:focus, .btn-yellow.btn-lighten-3:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-lighten-3 {
  border-color: #FFF59D !important;
  color: #FFF59D !important; }
  .btn-outline-yellow.btn-outline-lighten-3:hover {
    background-color: #FFF59D !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF59D !important; }

.border-yellow.border-lighten-3 {
  border: 1px solid #FFF59D !important; }

.border-top-yellow.border-top-lighten-3 {
  border-top: 1px solid #FFF59D !important; }

.border-bottom-yellow.border-bottom-lighten-3 {
  border-bottom: 1px solid #FFF59D !important; }

.border-left-yellow.border-left-lighten-3 {
  border-left: 1px solid #FFF59D !important; }

.border-right-yellow.border-right-lighten-3 {
  border-right: 1px solid #FFF59D !important; }

.overlay-yellow.overlay-lighten-3 {
  background: #FFF59D;
  /* The Fallback */
  background: rgba(255, 245, 157, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFF59D; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF59D; }

.yellow.lighten-2 {
  color: #FFF176 !important; }

.bg-yellow.bg-lighten-2 {
  background-color: #FFF176 !important; }

.btn-yellow.btn-lighten-2 {
  border-color: #FBC02D !important;
  background-color: #FFF176 !important; }
  .btn-yellow.btn-lighten-2:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-lighten-2:focus, .btn-yellow.btn-lighten-2:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-lighten-2 {
  border-color: #FFF176 !important;
  color: #FFF176 !important; }
  .btn-outline-yellow.btn-outline-lighten-2:hover {
    background-color: #FFF176 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF176 !important; }

.border-yellow.border-lighten-2 {
  border: 1px solid #FFF176 !important; }

.border-top-yellow.border-top-lighten-2 {
  border-top: 1px solid #FFF176 !important; }

.border-bottom-yellow.border-bottom-lighten-2 {
  border-bottom: 1px solid #FFF176 !important; }

.border-left-yellow.border-left-lighten-2 {
  border-left: 1px solid #FFF176 !important; }

.border-right-yellow.border-right-lighten-2 {
  border-right: 1px solid #FFF176 !important; }

.overlay-yellow.overlay-lighten-2 {
  background: #FFF176;
  /* The Fallback */
  background: rgba(255, 241, 118, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFF176; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF176; }

.yellow.lighten-1 {
  color: #FFEE58 !important; }

.bg-yellow.bg-lighten-1 {
  background-color: #FFEE58 !important; }

.btn-yellow.btn-lighten-1 {
  border-color: #FBC02D !important;
  background-color: #FFEE58 !important; }
  .btn-yellow.btn-lighten-1:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-lighten-1:focus, .btn-yellow.btn-lighten-1:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-lighten-1 {
  border-color: #FFEE58 !important;
  color: #FFEE58 !important; }
  .btn-outline-yellow.btn-outline-lighten-1:hover {
    background-color: #FFEE58 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEE58 !important; }

.border-yellow.border-lighten-1 {
  border: 1px solid #FFEE58 !important; }

.border-top-yellow.border-top-lighten-1 {
  border-top: 1px solid #FFEE58 !important; }

.border-bottom-yellow.border-bottom-lighten-1 {
  border-bottom: 1px solid #FFEE58 !important; }

.border-left-yellow.border-left-lighten-1 {
  border-left: 1px solid #FFEE58 !important; }

.border-right-yellow.border-right-lighten-1 {
  border-right: 1px solid #FFEE58 !important; }

.overlay-yellow.overlay-lighten-1 {
  background: #FFEE58;
  /* The Fallback */
  background: rgba(255, 238, 88, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFEE58; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFEE58; }

.yellow {
  color: #FFEB3B !important; }

.bg-yellow {
  background-color: #FFEB3B !important; }
  .bg-yellow .card-header,
  .bg-yellow .card-footer {
    background-color: transparent; }

.alert-yellow {
  border-color: #fff282 !important;
  background-color: #fff282 !important;
  color: #887a00 !important; }
  .alert-yellow .alert-link {
    color: #5f5500 !important; }

.bullet.bullet-yellow {
  background-color: #FFEB3B; }

.bg-light-yellow {
  background-color: rgba(255, 235, 59, 0.15); }

.border-yellow {
  border-color: #FFEB3B; }

.bg-yellow.badge-glow,
.border-yellow.badge-glow {
  box-shadow: 0px 0px 10px #FFEB3B; }

.overlay-yellow {
  background: #FFEB3B;
  /* The Fallback */
  background: rgba(255, 235, 59, 0.8); }

/* .card-outline-yellow{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-yellow {
  border-color: !important;
  background-color: #FFEB3B !important;
  color: #FFFFFF; }
  .btn-yellow:hover {
    border-color: #FDD835 !important;
    background-color: #FFEE58 !important;
    color: #FFF !important; }
  .btn-yellow:focus, .btn-yellow:active {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important;
    color: #FFF !important; }

.btn-outline-yellow {
  border-color: #FFEB3B;
  background-color: transparent;
  color: #FFEB3B; }
  .btn-outline-yellow:hover {
    background-color: #FFEB3B;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-yellow:before {
  background-color: #FFEB3B; }

input[type="checkbox"].bg-yellow + .custom-control-label:before, input[type="radio"].bg-yellow + .custom-control-label:before {
  background-color: #FFEB3B !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEB3B !important; }

.border-yellow {
  border: 1px solid #FFEB3B !important; }

.border-top-yellow {
  border-top: 1px solid #FFEB3B; }

.border-bottom-yellow {
  border-bottom: 1px solid #FFEB3B; }

.border-left-yellow {
  border-left: 1px solid #FFEB3B; }

.border-right-yellow {
  border-right: 1px solid #FFEB3B; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFEB3B; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFEB3B; }

.yellow.darken-1 {
  color: #FDD835 !important; }

.bg-yellow.bg-darken-1 {
  background-color: #FDD835 !important; }

.btn-yellow.btn-darken-1 {
  border-color: #FBC02D !important;
  background-color: #FDD835 !important; }
  .btn-yellow.btn-darken-1:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-darken-1:focus, .btn-yellow.btn-darken-1:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-darken-1 {
  border-color: #FDD835 !important;
  color: #FDD835 !important; }
  .btn-outline-yellow.btn-outline-darken-1:hover {
    background-color: #FDD835 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FDD835 !important; }

.border-yellow.border-darken-1 {
  border: 1px solid #FDD835 !important; }

.border-top-yellow.border-top-darken-1 {
  border-top: 1px solid #FDD835 !important; }

.border-bottom-yellow.border-bottom-darken-1 {
  border-bottom: 1px solid #FDD835 !important; }

.border-left-yellow.border-left-darken-1 {
  border-left: 1px solid #FDD835 !important; }

.border-right-yellow.border-right-darken-1 {
  border-right: 1px solid #FDD835 !important; }

.overlay-yellow.overlay-darken-1 {
  background: #FDD835;
  /* The Fallback */
  background: rgba(253, 216, 53, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FDD835; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FDD835; }

.yellow.darken-2 {
  color: #FBC02D !important; }

.bg-yellow.bg-darken-2 {
  background-color: #FBC02D !important; }

.btn-yellow.btn-darken-2 {
  border-color: #FBC02D !important;
  background-color: #FBC02D !important; }
  .btn-yellow.btn-darken-2:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-darken-2:focus, .btn-yellow.btn-darken-2:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-darken-2 {
  border-color: #FBC02D !important;
  color: #FBC02D !important; }
  .btn-outline-yellow.btn-outline-darken-2:hover {
    background-color: #FBC02D !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FBC02D !important; }

.border-yellow.border-darken-2 {
  border: 1px solid #FBC02D !important; }

.border-top-yellow.border-top-darken-2 {
  border-top: 1px solid #FBC02D !important; }

.border-bottom-yellow.border-bottom-darken-2 {
  border-bottom: 1px solid #FBC02D !important; }

.border-left-yellow.border-left-darken-2 {
  border-left: 1px solid #FBC02D !important; }

.border-right-yellow.border-right-darken-2 {
  border-right: 1px solid #FBC02D !important; }

.overlay-yellow.overlay-darken-2 {
  background: #FBC02D;
  /* The Fallback */
  background: rgba(251, 192, 45, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FBC02D; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FBC02D; }

.yellow.darken-3 {
  color: #F9A825 !important; }

.bg-yellow.bg-darken-3 {
  background-color: #F9A825 !important; }

.btn-yellow.btn-darken-3 {
  border-color: #FBC02D !important;
  background-color: #F9A825 !important; }
  .btn-yellow.btn-darken-3:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-darken-3:focus, .btn-yellow.btn-darken-3:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-darken-3 {
  border-color: #F9A825 !important;
  color: #F9A825 !important; }
  .btn-outline-yellow.btn-outline-darken-3:hover {
    background-color: #F9A825 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F9A825 !important; }

.border-yellow.border-darken-3 {
  border: 1px solid #F9A825 !important; }

.border-top-yellow.border-top-darken-3 {
  border-top: 1px solid #F9A825 !important; }

.border-bottom-yellow.border-bottom-darken-3 {
  border-bottom: 1px solid #F9A825 !important; }

.border-left-yellow.border-left-darken-3 {
  border-left: 1px solid #F9A825 !important; }

.border-right-yellow.border-right-darken-3 {
  border-right: 1px solid #F9A825 !important; }

.overlay-yellow.overlay-darken-3 {
  background: #F9A825;
  /* The Fallback */
  background: rgba(249, 168, 37, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #F9A825; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F9A825; }

.yellow.darken-4 {
  color: #F57F17 !important; }

.bg-yellow.bg-darken-4 {
  background-color: #F57F17 !important; }

.btn-yellow.btn-darken-4 {
  border-color: #FBC02D !important;
  background-color: #F57F17 !important; }
  .btn-yellow.btn-darken-4:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-darken-4:focus, .btn-yellow.btn-darken-4:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-darken-4 {
  border-color: #F57F17 !important;
  color: #F57F17 !important; }
  .btn-outline-yellow.btn-outline-darken-4:hover {
    background-color: #F57F17 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #F57F17 !important; }

.border-yellow.border-darken-4 {
  border: 1px solid #F57F17 !important; }

.border-top-yellow.border-top-darken-4 {
  border-top: 1px solid #F57F17 !important; }

.border-bottom-yellow.border-bottom-darken-4 {
  border-bottom: 1px solid #F57F17 !important; }

.border-left-yellow.border-left-darken-4 {
  border-left: 1px solid #F57F17 !important; }

.border-right-yellow.border-right-darken-4 {
  border-right: 1px solid #F57F17 !important; }

.overlay-yellow.overlay-darken-4 {
  background: #F57F17;
  /* The Fallback */
  background: rgba(245, 127, 23, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #F57F17; }

.edit-kanban-item select option.bg-color_name {
  background-color: #F57F17; }

.yellow.accent-1 {
  color: #FFFF8D !important; }

.bg-yellow.bg-accent-1 {
  background-color: #FFFF8D !important; }

.btn-yellow.btn-accent-1 {
  border-color: #FBC02D !important;
  background-color: #FFFF8D !important; }
  .btn-yellow.btn-accent-1:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-accent-1:focus, .btn-yellow.btn-accent-1:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-accent-1 {
  border-color: #FFFF8D !important;
  color: #FFFF8D !important; }
  .btn-outline-yellow.btn-outline-accent-1:hover {
    background-color: #FFFF8D !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFF8D !important; }

.border-yellow.border-accent-1 {
  border: 1px solid #FFFF8D !important; }

.border-top-yellow.border-top-accent-1 {
  border-top: 1px solid #FFFF8D !important; }

.border-bottom-yellow.border-bottom-accent-1 {
  border-bottom: 1px solid #FFFF8D !important; }

.border-left-yellow.border-left-accent-1 {
  border-left: 1px solid #FFFF8D !important; }

.border-right-yellow.border-right-accent-1 {
  border-right: 1px solid #FFFF8D !important; }

.overlay-yellow.overlay-accent-1 {
  background: #FFFF8D;
  /* The Fallback */
  background: rgba(255, 255, 141, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFFF8D; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFFF8D; }

.yellow.accent-2 {
  color: #FFFF00 !important; }

.bg-yellow.bg-accent-2 {
  background-color: #FFFF00 !important; }

.btn-yellow.btn-accent-2 {
  border-color: #FBC02D !important;
  background-color: #FFFF00 !important; }
  .btn-yellow.btn-accent-2:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-accent-2:focus, .btn-yellow.btn-accent-2:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-accent-2 {
  border-color: #FFFF00 !important;
  color: #FFFF00 !important; }
  .btn-outline-yellow.btn-outline-accent-2:hover {
    background-color: #FFFF00 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFF00 !important; }

.border-yellow.border-accent-2 {
  border: 1px solid #FFFF00 !important; }

.border-top-yellow.border-top-accent-2 {
  border-top: 1px solid #FFFF00 !important; }

.border-bottom-yellow.border-bottom-accent-2 {
  border-bottom: 1px solid #FFFF00 !important; }

.border-left-yellow.border-left-accent-2 {
  border-left: 1px solid #FFFF00 !important; }

.border-right-yellow.border-right-accent-2 {
  border-right: 1px solid #FFFF00 !important; }

.overlay-yellow.overlay-accent-2 {
  background: #FFFF00;
  /* The Fallback */
  background: rgba(255, 255, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFFF00; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFFF00; }

.yellow.accent-3 {
  color: #FFEA00 !important; }

.bg-yellow.bg-accent-3 {
  background-color: #FFEA00 !important; }

.btn-yellow.btn-accent-3 {
  border-color: #FBC02D !important;
  background-color: #FFEA00 !important; }
  .btn-yellow.btn-accent-3:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-accent-3:focus, .btn-yellow.btn-accent-3:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-accent-3 {
  border-color: #FFEA00 !important;
  color: #FFEA00 !important; }
  .btn-outline-yellow.btn-outline-accent-3:hover {
    background-color: #FFEA00 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFEA00 !important; }

.border-yellow.border-accent-3 {
  border: 1px solid #FFEA00 !important; }

.border-top-yellow.border-top-accent-3 {
  border-top: 1px solid #FFEA00 !important; }

.border-bottom-yellow.border-bottom-accent-3 {
  border-bottom: 1px solid #FFEA00 !important; }

.border-left-yellow.border-left-accent-3 {
  border-left: 1px solid #FFEA00 !important; }

.border-right-yellow.border-right-accent-3 {
  border-right: 1px solid #FFEA00 !important; }

.overlay-yellow.overlay-accent-3 {
  background: #FFEA00;
  /* The Fallback */
  background: rgba(255, 234, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFEA00; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFEA00; }

.yellow.accent-4 {
  color: #FFD600 !important; }

.bg-yellow.bg-accent-4 {
  background-color: #FFD600 !important; }

.btn-yellow.btn-accent-4 {
  border-color: #FBC02D !important;
  background-color: #FFD600 !important; }
  .btn-yellow.btn-accent-4:hover {
    border-color: #FBC02D !important;
    background-color: #F9A825 !important; }
  .btn-yellow.btn-accent-4:focus, .btn-yellow.btn-accent-4:active {
    border-color: #F9A825 !important;
    background-color: #F57F17 !important; }

.btn-outline-yellow.btn-outline-accent-4 {
  border-color: #FFD600 !important;
  color: #FFD600 !important; }
  .btn-outline-yellow.btn-outline-accent-4:hover {
    background-color: #FFD600 !important; }

input:focus ~ .bg-yellow {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD600 !important; }

.border-yellow.border-accent-4 {
  border: 1px solid #FFD600 !important; }

.border-top-yellow.border-top-accent-4 {
  border-top: 1px solid #FFD600 !important; }

.border-bottom-yellow.border-bottom-accent-4 {
  border-bottom: 1px solid #FFD600 !important; }

.border-left-yellow.border-left-accent-4 {
  border-left: 1px solid #FFD600 !important; }

.border-right-yellow.border-right-accent-4 {
  border-right: 1px solid #FFD600 !important; }

.overlay-yellow.overlay-accent-4 {
  background: #FFD600;
  /* The Fallback */
  background: rgba(255, 214, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=yellow]:before {
  background-color: #FFD600; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFD600; }

.amber.lighten-5 {
  color: #FFF8E1 !important; }

.bg-amber.bg-lighten-5 {
  background-color: #FFF8E1 !important; }

.btn-amber.btn-lighten-5 {
  border-color: #FFA000 !important;
  background-color: #FFF8E1 !important; }
  .btn-amber.btn-lighten-5:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-lighten-5:focus, .btn-amber.btn-lighten-5:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-lighten-5 {
  border-color: #FFF8E1 !important;
  color: #FFF8E1 !important; }
  .btn-outline-amber.btn-outline-lighten-5:hover {
    background-color: #FFF8E1 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFF8E1 !important; }

.border-amber.border-lighten-5 {
  border: 1px solid #FFF8E1 !important; }

.border-top-amber.border-top-lighten-5 {
  border-top: 1px solid #FFF8E1 !important; }

.border-bottom-amber.border-bottom-lighten-5 {
  border-bottom: 1px solid #FFF8E1 !important; }

.border-left-amber.border-left-lighten-5 {
  border-left: 1px solid #FFF8E1 !important; }

.border-right-amber.border-right-lighten-5 {
  border-right: 1px solid #FFF8E1 !important; }

.overlay-amber.overlay-lighten-5 {
  background: #FFF8E1;
  /* The Fallback */
  background: rgba(255, 248, 225, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFF8E1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFF8E1; }

.amber.lighten-4 {
  color: #FFECB3 !important; }

.bg-amber.bg-lighten-4 {
  background-color: #FFECB3 !important; }

.btn-amber.btn-lighten-4 {
  border-color: #FFA000 !important;
  background-color: #FFECB3 !important; }
  .btn-amber.btn-lighten-4:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-lighten-4:focus, .btn-amber.btn-lighten-4:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-lighten-4 {
  border-color: #FFECB3 !important;
  color: #FFECB3 !important; }
  .btn-outline-amber.btn-outline-lighten-4:hover {
    background-color: #FFECB3 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFECB3 !important; }

.border-amber.border-lighten-4 {
  border: 1px solid #FFECB3 !important; }

.border-top-amber.border-top-lighten-4 {
  border-top: 1px solid #FFECB3 !important; }

.border-bottom-amber.border-bottom-lighten-4 {
  border-bottom: 1px solid #FFECB3 !important; }

.border-left-amber.border-left-lighten-4 {
  border-left: 1px solid #FFECB3 !important; }

.border-right-amber.border-right-lighten-4 {
  border-right: 1px solid #FFECB3 !important; }

.overlay-amber.overlay-lighten-4 {
  background: #FFECB3;
  /* The Fallback */
  background: rgba(255, 236, 179, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFECB3; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFECB3; }

.amber.lighten-3 {
  color: #FFE082 !important; }

.bg-amber.bg-lighten-3 {
  background-color: #FFE082 !important; }

.btn-amber.btn-lighten-3 {
  border-color: #FFA000 !important;
  background-color: #FFE082 !important; }
  .btn-amber.btn-lighten-3:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-lighten-3:focus, .btn-amber.btn-lighten-3:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-lighten-3 {
  border-color: #FFE082 !important;
  color: #FFE082 !important; }
  .btn-outline-amber.btn-outline-lighten-3:hover {
    background-color: #FFE082 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE082 !important; }

.border-amber.border-lighten-3 {
  border: 1px solid #FFE082 !important; }

.border-top-amber.border-top-lighten-3 {
  border-top: 1px solid #FFE082 !important; }

.border-bottom-amber.border-bottom-lighten-3 {
  border-bottom: 1px solid #FFE082 !important; }

.border-left-amber.border-left-lighten-3 {
  border-left: 1px solid #FFE082 !important; }

.border-right-amber.border-right-lighten-3 {
  border-right: 1px solid #FFE082 !important; }

.overlay-amber.overlay-lighten-3 {
  background: #FFE082;
  /* The Fallback */
  background: rgba(255, 224, 130, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFE082; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFE082; }

.amber.lighten-2 {
  color: #FFD54F !important; }

.bg-amber.bg-lighten-2 {
  background-color: #FFD54F !important; }

.btn-amber.btn-lighten-2 {
  border-color: #FFA000 !important;
  background-color: #FFD54F !important; }
  .btn-amber.btn-lighten-2:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-lighten-2:focus, .btn-amber.btn-lighten-2:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-lighten-2 {
  border-color: #FFD54F !important;
  color: #FFD54F !important; }
  .btn-outline-amber.btn-outline-lighten-2:hover {
    background-color: #FFD54F !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD54F !important; }

.border-amber.border-lighten-2 {
  border: 1px solid #FFD54F !important; }

.border-top-amber.border-top-lighten-2 {
  border-top: 1px solid #FFD54F !important; }

.border-bottom-amber.border-bottom-lighten-2 {
  border-bottom: 1px solid #FFD54F !important; }

.border-left-amber.border-left-lighten-2 {
  border-left: 1px solid #FFD54F !important; }

.border-right-amber.border-right-lighten-2 {
  border-right: 1px solid #FFD54F !important; }

.overlay-amber.overlay-lighten-2 {
  background: #FFD54F;
  /* The Fallback */
  background: rgba(255, 213, 79, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFD54F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFD54F; }

.amber.lighten-1 {
  color: #FFCA28 !important; }

.bg-amber.bg-lighten-1 {
  background-color: #FFCA28 !important; }

.btn-amber.btn-lighten-1 {
  border-color: #FFA000 !important;
  background-color: #FFCA28 !important; }
  .btn-amber.btn-lighten-1:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-lighten-1:focus, .btn-amber.btn-lighten-1:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-lighten-1 {
  border-color: #FFCA28 !important;
  color: #FFCA28 !important; }
  .btn-outline-amber.btn-outline-lighten-1:hover {
    background-color: #FFCA28 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFCA28 !important; }

.border-amber.border-lighten-1 {
  border: 1px solid #FFCA28 !important; }

.border-top-amber.border-top-lighten-1 {
  border-top: 1px solid #FFCA28 !important; }

.border-bottom-amber.border-bottom-lighten-1 {
  border-bottom: 1px solid #FFCA28 !important; }

.border-left-amber.border-left-lighten-1 {
  border-left: 1px solid #FFCA28 !important; }

.border-right-amber.border-right-lighten-1 {
  border-right: 1px solid #FFCA28 !important; }

.overlay-amber.overlay-lighten-1 {
  background: #FFCA28;
  /* The Fallback */
  background: rgba(255, 202, 40, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFCA28; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFCA28; }

.amber {
  color: #FFC107 !important; }

.bg-amber {
  background-color: #FFC107 !important; }
  .bg-amber .card-header,
  .bg-amber .card-footer {
    background-color: transparent; }

.alert-amber {
  border-color: #ffd34e !important;
  background-color: #ffd34e !important;
  color: #543f00 !important; }
  .alert-amber .alert-link {
    color: #2b2000 !important; }

.bullet.bullet-amber {
  background-color: #FFC107; }

.bg-light-amber {
  background-color: rgba(255, 193, 7, 0.15); }

.border-amber {
  border-color: #FFC107; }

.bg-amber.badge-glow,
.border-amber.badge-glow {
  box-shadow: 0px 0px 10px #FFC107; }

.overlay-amber {
  background: #FFC107;
  /* The Fallback */
  background: rgba(255, 193, 7, 0.8); }

/* .card-outline-amber{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-amber {
  border-color: !important;
  background-color: #FFC107 !important;
  color: #FFFFFF; }
  .btn-amber:hover {
    border-color: #FFB300 !important;
    background-color: #FFCA28 !important;
    color: #FFF !important; }
  .btn-amber:focus, .btn-amber:active {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important;
    color: #FFF !important; }

.btn-outline-amber {
  border-color: #FFC107;
  background-color: transparent;
  color: #FFC107; }
  .btn-outline-amber:hover {
    background-color: #FFC107;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-amber:before {
  background-color: #FFC107; }

input[type="checkbox"].bg-amber + .custom-control-label:before, input[type="radio"].bg-amber + .custom-control-label:before {
  background-color: #FFC107 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFC107 !important; }

.border-amber {
  border: 1px solid #FFC107 !important; }

.border-top-amber {
  border-top: 1px solid #FFC107; }

.border-bottom-amber {
  border-bottom: 1px solid #FFC107; }

.border-left-amber {
  border-left: 1px solid #FFC107; }

.border-right-amber {
  border-right: 1px solid #FFC107; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFC107; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFC107; }

.amber.darken-1 {
  color: #FFB300 !important; }

.bg-amber.bg-darken-1 {
  background-color: #FFB300 !important; }

.btn-amber.btn-darken-1 {
  border-color: #FFA000 !important;
  background-color: #FFB300 !important; }
  .btn-amber.btn-darken-1:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-darken-1:focus, .btn-amber.btn-darken-1:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-darken-1 {
  border-color: #FFB300 !important;
  color: #FFB300 !important; }
  .btn-outline-amber.btn-outline-darken-1:hover {
    background-color: #FFB300 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFB300 !important; }

.border-amber.border-darken-1 {
  border: 1px solid #FFB300 !important; }

.border-top-amber.border-top-darken-1 {
  border-top: 1px solid #FFB300 !important; }

.border-bottom-amber.border-bottom-darken-1 {
  border-bottom: 1px solid #FFB300 !important; }

.border-left-amber.border-left-darken-1 {
  border-left: 1px solid #FFB300 !important; }

.border-right-amber.border-right-darken-1 {
  border-right: 1px solid #FFB300 !important; }

.overlay-amber.overlay-darken-1 {
  background: #FFB300;
  /* The Fallback */
  background: rgba(255, 179, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFB300; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFB300; }

.amber.darken-2 {
  color: #FFA000 !important; }

.bg-amber.bg-darken-2 {
  background-color: #FFA000 !important; }

.btn-amber.btn-darken-2 {
  border-color: #FFA000 !important;
  background-color: #FFA000 !important; }
  .btn-amber.btn-darken-2:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-darken-2:focus, .btn-amber.btn-darken-2:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-darken-2 {
  border-color: #FFA000 !important;
  color: #FFA000 !important; }
  .btn-outline-amber.btn-outline-darken-2:hover {
    background-color: #FFA000 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFA000 !important; }

.border-amber.border-darken-2 {
  border: 1px solid #FFA000 !important; }

.border-top-amber.border-top-darken-2 {
  border-top: 1px solid #FFA000 !important; }

.border-bottom-amber.border-bottom-darken-2 {
  border-bottom: 1px solid #FFA000 !important; }

.border-left-amber.border-left-darken-2 {
  border-left: 1px solid #FFA000 !important; }

.border-right-amber.border-right-darken-2 {
  border-right: 1px solid #FFA000 !important; }

.overlay-amber.overlay-darken-2 {
  background: #FFA000;
  /* The Fallback */
  background: rgba(255, 160, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFA000; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFA000; }

.amber.darken-3 {
  color: #FF8F00 !important; }

.bg-amber.bg-darken-3 {
  background-color: #FF8F00 !important; }

.btn-amber.btn-darken-3 {
  border-color: #FFA000 !important;
  background-color: #FF8F00 !important; }
  .btn-amber.btn-darken-3:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-darken-3:focus, .btn-amber.btn-darken-3:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-darken-3 {
  border-color: #FF8F00 !important;
  color: #FF8F00 !important; }
  .btn-outline-amber.btn-outline-darken-3:hover {
    background-color: #FF8F00 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF8F00 !important; }

.border-amber.border-darken-3 {
  border: 1px solid #FF8F00 !important; }

.border-top-amber.border-top-darken-3 {
  border-top: 1px solid #FF8F00 !important; }

.border-bottom-amber.border-bottom-darken-3 {
  border-bottom: 1px solid #FF8F00 !important; }

.border-left-amber.border-left-darken-3 {
  border-left: 1px solid #FF8F00 !important; }

.border-right-amber.border-right-darken-3 {
  border-right: 1px solid #FF8F00 !important; }

.overlay-amber.overlay-darken-3 {
  background: #FF8F00;
  /* The Fallback */
  background: rgba(255, 143, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FF8F00; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF8F00; }

.amber.darken-4 {
  color: #FF6F00 !important; }

.bg-amber.bg-darken-4 {
  background-color: #FF6F00 !important; }

.btn-amber.btn-darken-4 {
  border-color: #FFA000 !important;
  background-color: #FF6F00 !important; }
  .btn-amber.btn-darken-4:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-darken-4:focus, .btn-amber.btn-darken-4:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-darken-4 {
  border-color: #FF6F00 !important;
  color: #FF6F00 !important; }
  .btn-outline-amber.btn-outline-darken-4:hover {
    background-color: #FF6F00 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FF6F00 !important; }

.border-amber.border-darken-4 {
  border: 1px solid #FF6F00 !important; }

.border-top-amber.border-top-darken-4 {
  border-top: 1px solid #FF6F00 !important; }

.border-bottom-amber.border-bottom-darken-4 {
  border-bottom: 1px solid #FF6F00 !important; }

.border-left-amber.border-left-darken-4 {
  border-left: 1px solid #FF6F00 !important; }

.border-right-amber.border-right-darken-4 {
  border-right: 1px solid #FF6F00 !important; }

.overlay-amber.overlay-darken-4 {
  background: #FF6F00;
  /* The Fallback */
  background: rgba(255, 111, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FF6F00; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FF6F00; }

.amber.accent-1 {
  color: #FFE57F !important; }

.bg-amber.bg-accent-1 {
  background-color: #FFE57F !important; }

.btn-amber.btn-accent-1 {
  border-color: #FFA000 !important;
  background-color: #FFE57F !important; }
  .btn-amber.btn-accent-1:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-accent-1:focus, .btn-amber.btn-accent-1:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-accent-1 {
  border-color: #FFE57F !important;
  color: #FFE57F !important; }
  .btn-outline-amber.btn-outline-accent-1:hover {
    background-color: #FFE57F !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFE57F !important; }

.border-amber.border-accent-1 {
  border: 1px solid #FFE57F !important; }

.border-top-amber.border-top-accent-1 {
  border-top: 1px solid #FFE57F !important; }

.border-bottom-amber.border-bottom-accent-1 {
  border-bottom: 1px solid #FFE57F !important; }

.border-left-amber.border-left-accent-1 {
  border-left: 1px solid #FFE57F !important; }

.border-right-amber.border-right-accent-1 {
  border-right: 1px solid #FFE57F !important; }

.overlay-amber.overlay-accent-1 {
  background: #FFE57F;
  /* The Fallback */
  background: rgba(255, 229, 127, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFE57F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFE57F; }

.amber.accent-2 {
  color: #FFD740 !important; }

.bg-amber.bg-accent-2 {
  background-color: #FFD740 !important; }

.btn-amber.btn-accent-2 {
  border-color: #FFA000 !important;
  background-color: #FFD740 !important; }
  .btn-amber.btn-accent-2:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-accent-2:focus, .btn-amber.btn-accent-2:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-accent-2 {
  border-color: #FFD740 !important;
  color: #FFD740 !important; }
  .btn-outline-amber.btn-outline-accent-2:hover {
    background-color: #FFD740 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFD740 !important; }

.border-amber.border-accent-2 {
  border: 1px solid #FFD740 !important; }

.border-top-amber.border-top-accent-2 {
  border-top: 1px solid #FFD740 !important; }

.border-bottom-amber.border-bottom-accent-2 {
  border-bottom: 1px solid #FFD740 !important; }

.border-left-amber.border-left-accent-2 {
  border-left: 1px solid #FFD740 !important; }

.border-right-amber.border-right-accent-2 {
  border-right: 1px solid #FFD740 !important; }

.overlay-amber.overlay-accent-2 {
  background: #FFD740;
  /* The Fallback */
  background: rgba(255, 215, 64, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFD740; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFD740; }

.amber.accent-3 {
  color: #FFC400 !important; }

.bg-amber.bg-accent-3 {
  background-color: #FFC400 !important; }

.btn-amber.btn-accent-3 {
  border-color: #FFA000 !important;
  background-color: #FFC400 !important; }
  .btn-amber.btn-accent-3:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-accent-3:focus, .btn-amber.btn-accent-3:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-accent-3 {
  border-color: #FFC400 !important;
  color: #FFC400 !important; }
  .btn-outline-amber.btn-outline-accent-3:hover {
    background-color: #FFC400 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFC400 !important; }

.border-amber.border-accent-3 {
  border: 1px solid #FFC400 !important; }

.border-top-amber.border-top-accent-3 {
  border-top: 1px solid #FFC400 !important; }

.border-bottom-amber.border-bottom-accent-3 {
  border-bottom: 1px solid #FFC400 !important; }

.border-left-amber.border-left-accent-3 {
  border-left: 1px solid #FFC400 !important; }

.border-right-amber.border-right-accent-3 {
  border-right: 1px solid #FFC400 !important; }

.overlay-amber.overlay-accent-3 {
  background: #FFC400;
  /* The Fallback */
  background: rgba(255, 196, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFC400; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFC400; }

.amber.accent-4 {
  color: #FFAB00 !important; }

.bg-amber.bg-accent-4 {
  background-color: #FFAB00 !important; }

.btn-amber.btn-accent-4 {
  border-color: #FFA000 !important;
  background-color: #FFAB00 !important; }
  .btn-amber.btn-accent-4:hover {
    border-color: #FFA000 !important;
    background-color: #FF8F00 !important; }
  .btn-amber.btn-accent-4:focus, .btn-amber.btn-accent-4:active {
    border-color: #FF8F00 !important;
    background-color: #FF6F00 !important; }

.btn-outline-amber.btn-outline-accent-4 {
  border-color: #FFAB00 !important;
  color: #FFAB00 !important; }
  .btn-outline-amber.btn-outline-accent-4:hover {
    background-color: #FFAB00 !important; }

input:focus ~ .bg-amber {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFAB00 !important; }

.border-amber.border-accent-4 {
  border: 1px solid #FFAB00 !important; }

.border-top-amber.border-top-accent-4 {
  border-top: 1px solid #FFAB00 !important; }

.border-bottom-amber.border-bottom-accent-4 {
  border-bottom: 1px solid #FFAB00 !important; }

.border-left-amber.border-left-accent-4 {
  border-left: 1px solid #FFAB00 !important; }

.border-right-amber.border-right-accent-4 {
  border-right: 1px solid #FFAB00 !important; }

.overlay-amber.overlay-accent-4 {
  background: #FFAB00;
  /* The Fallback */
  background: rgba(255, 171, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=amber]:before {
  background-color: #FFAB00; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFAB00; }

.blue-grey.lighten-5 {
  color: #ECEFF1 !important; }

.bg-blue-grey.bg-lighten-5 {
  background-color: #ECEFF1 !important; }

.btn-blue-grey.btn-lighten-5 {
  border-color: #455A64 !important;
  background-color: #ECEFF1 !important; }
  .btn-blue-grey.btn-lighten-5:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-lighten-5:focus, .btn-blue-grey.btn-lighten-5:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-lighten-5 {
  border-color: #ECEFF1 !important;
  color: #ECEFF1 !important; }
  .btn-outline-blue-grey.btn-outline-lighten-5:hover {
    background-color: #ECEFF1 !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ECEFF1 !important; }

.border-blue-grey.border-lighten-5 {
  border: 1px solid #ECEFF1 !important; }

.border-top-blue-grey.border-top-lighten-5 {
  border-top: 1px solid #ECEFF1 !important; }

.border-bottom-blue-grey.border-bottom-lighten-5 {
  border-bottom: 1px solid #ECEFF1 !important; }

.border-left-blue-grey.border-left-lighten-5 {
  border-left: 1px solid #ECEFF1 !important; }

.border-right-blue-grey.border-right-lighten-5 {
  border-right: 1px solid #ECEFF1 !important; }

.overlay-blue-grey.overlay-lighten-5 {
  background: #ECEFF1;
  /* The Fallback */
  background: rgba(236, 239, 241, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #ECEFF1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ECEFF1; }

.blue-grey.lighten-4 {
  color: #CFD8DC !important; }

.bg-blue-grey.bg-lighten-4 {
  background-color: #CFD8DC !important; }

.btn-blue-grey.btn-lighten-4 {
  border-color: #455A64 !important;
  background-color: #CFD8DC !important; }
  .btn-blue-grey.btn-lighten-4:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-lighten-4:focus, .btn-blue-grey.btn-lighten-4:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-lighten-4 {
  border-color: #CFD8DC !important;
  color: #CFD8DC !important; }
  .btn-outline-blue-grey.btn-outline-lighten-4:hover {
    background-color: #CFD8DC !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CFD8DC !important; }

.border-blue-grey.border-lighten-4 {
  border: 1px solid #CFD8DC !important; }

.border-top-blue-grey.border-top-lighten-4 {
  border-top: 1px solid #CFD8DC !important; }

.border-bottom-blue-grey.border-bottom-lighten-4 {
  border-bottom: 1px solid #CFD8DC !important; }

.border-left-blue-grey.border-left-lighten-4 {
  border-left: 1px solid #CFD8DC !important; }

.border-right-blue-grey.border-right-lighten-4 {
  border-right: 1px solid #CFD8DC !important; }

.overlay-blue-grey.overlay-lighten-4 {
  background: #CFD8DC;
  /* The Fallback */
  background: rgba(207, 216, 220, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #CFD8DC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #CFD8DC; }

.blue-grey.lighten-3 {
  color: #B0BEC5 !important; }

.bg-blue-grey.bg-lighten-3 {
  background-color: #B0BEC5 !important; }

.btn-blue-grey.btn-lighten-3 {
  border-color: #455A64 !important;
  background-color: #B0BEC5 !important; }
  .btn-blue-grey.btn-lighten-3:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-lighten-3:focus, .btn-blue-grey.btn-lighten-3:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-lighten-3 {
  border-color: #B0BEC5 !important;
  color: #B0BEC5 !important; }
  .btn-outline-blue-grey.btn-outline-lighten-3:hover {
    background-color: #B0BEC5 !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #B0BEC5 !important; }

.border-blue-grey.border-lighten-3 {
  border: 1px solid #B0BEC5 !important; }

.border-top-blue-grey.border-top-lighten-3 {
  border-top: 1px solid #B0BEC5 !important; }

.border-bottom-blue-grey.border-bottom-lighten-3 {
  border-bottom: 1px solid #B0BEC5 !important; }

.border-left-blue-grey.border-left-lighten-3 {
  border-left: 1px solid #B0BEC5 !important; }

.border-right-blue-grey.border-right-lighten-3 {
  border-right: 1px solid #B0BEC5 !important; }

.overlay-blue-grey.overlay-lighten-3 {
  background: #B0BEC5;
  /* The Fallback */
  background: rgba(176, 190, 197, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #B0BEC5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #B0BEC5; }

.blue-grey.lighten-2 {
  color: #90A4AE !important; }

.bg-blue-grey.bg-lighten-2 {
  background-color: #90A4AE !important; }

.btn-blue-grey.btn-lighten-2 {
  border-color: #455A64 !important;
  background-color: #90A4AE !important; }
  .btn-blue-grey.btn-lighten-2:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-lighten-2:focus, .btn-blue-grey.btn-lighten-2:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-lighten-2 {
  border-color: #90A4AE !important;
  color: #90A4AE !important; }
  .btn-outline-blue-grey.btn-outline-lighten-2:hover {
    background-color: #90A4AE !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #90A4AE !important; }

.border-blue-grey.border-lighten-2 {
  border: 1px solid #90A4AE !important; }

.border-top-blue-grey.border-top-lighten-2 {
  border-top: 1px solid #90A4AE !important; }

.border-bottom-blue-grey.border-bottom-lighten-2 {
  border-bottom: 1px solid #90A4AE !important; }

.border-left-blue-grey.border-left-lighten-2 {
  border-left: 1px solid #90A4AE !important; }

.border-right-blue-grey.border-right-lighten-2 {
  border-right: 1px solid #90A4AE !important; }

.overlay-blue-grey.overlay-lighten-2 {
  background: #90A4AE;
  /* The Fallback */
  background: rgba(144, 164, 174, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #90A4AE; }

.edit-kanban-item select option.bg-color_name {
  background-color: #90A4AE; }

.blue-grey.lighten-1 {
  color: #78909C !important; }

.bg-blue-grey.bg-lighten-1 {
  background-color: #78909C !important; }

.btn-blue-grey.btn-lighten-1 {
  border-color: #455A64 !important;
  background-color: #78909C !important; }
  .btn-blue-grey.btn-lighten-1:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-lighten-1:focus, .btn-blue-grey.btn-lighten-1:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-lighten-1 {
  border-color: #78909C !important;
  color: #78909C !important; }
  .btn-outline-blue-grey.btn-outline-lighten-1:hover {
    background-color: #78909C !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #78909C !important; }

.border-blue-grey.border-lighten-1 {
  border: 1px solid #78909C !important; }

.border-top-blue-grey.border-top-lighten-1 {
  border-top: 1px solid #78909C !important; }

.border-bottom-blue-grey.border-bottom-lighten-1 {
  border-bottom: 1px solid #78909C !important; }

.border-left-blue-grey.border-left-lighten-1 {
  border-left: 1px solid #78909C !important; }

.border-right-blue-grey.border-right-lighten-1 {
  border-right: 1px solid #78909C !important; }

.overlay-blue-grey.overlay-lighten-1 {
  background: #78909C;
  /* The Fallback */
  background: rgba(120, 144, 156, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #78909C; }

.edit-kanban-item select option.bg-color_name {
  background-color: #78909C; }

.blue-grey {
  color: #607D8B !important; }

.bg-blue-grey {
  background-color: #607D8B !important; }
  .bg-blue-grey .card-header,
  .bg-blue-grey .card-footer {
    background-color: transparent; }

.alert-blue-grey {
  border-color: #87a0ac !important;
  background-color: #87a0ac !important;
  color: #171e21 !important; }
  .alert-blue-grey .alert-link {
    color: #060809 !important; }

.bullet.bullet-blue-grey {
  background-color: #607D8B; }

.bg-light-blue-grey {
  background-color: rgba(96, 125, 139, 0.15); }

.border-blue-grey {
  border-color: #607D8B; }

.bg-blue-grey.badge-glow,
.border-blue-grey.badge-glow {
  box-shadow: 0px 0px 10px #607D8B; }

.overlay-blue-grey {
  background: #607D8B;
  /* The Fallback */
  background: rgba(96, 125, 139, 0.8); }

/* .card-outline-blue-grey{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-blue-grey {
  border-color: !important;
  background-color: #607D8B !important;
  color: #FFFFFF; }
  .btn-blue-grey:hover {
    border-color: #546E7A !important;
    background-color: #78909C !important;
    color: #FFF !important; }
  .btn-blue-grey:focus, .btn-blue-grey:active {
    border-color: #455A64 !important;
    background-color: #37474F !important;
    color: #FFF !important; }

.btn-outline-blue-grey {
  border-color: #607D8B;
  background-color: transparent;
  color: #607D8B; }
  .btn-outline-blue-grey:hover {
    background-color: #607D8B;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-blue-grey:before {
  background-color: #607D8B; }

input[type="checkbox"].bg-blue-grey + .custom-control-label:before, input[type="radio"].bg-blue-grey + .custom-control-label:before {
  background-color: #607D8B !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #607D8B !important; }

.border-blue-grey {
  border: 1px solid #607D8B !important; }

.border-top-blue-grey {
  border-top: 1px solid #607D8B; }

.border-bottom-blue-grey {
  border-bottom: 1px solid #607D8B; }

.border-left-blue-grey {
  border-left: 1px solid #607D8B; }

.border-right-blue-grey {
  border-right: 1px solid #607D8B; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #607D8B; }

.edit-kanban-item select option.bg-color_name {
  background-color: #607D8B; }

.blue-grey.darken-1 {
  color: #546E7A !important; }

.bg-blue-grey.bg-darken-1 {
  background-color: #546E7A !important; }

.btn-blue-grey.btn-darken-1 {
  border-color: #455A64 !important;
  background-color: #546E7A !important; }
  .btn-blue-grey.btn-darken-1:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-darken-1:focus, .btn-blue-grey.btn-darken-1:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-darken-1 {
  border-color: #546E7A !important;
  color: #546E7A !important; }
  .btn-outline-blue-grey.btn-outline-darken-1:hover {
    background-color: #546E7A !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #546E7A !important; }

.border-blue-grey.border-darken-1 {
  border: 1px solid #546E7A !important; }

.border-top-blue-grey.border-top-darken-1 {
  border-top: 1px solid #546E7A !important; }

.border-bottom-blue-grey.border-bottom-darken-1 {
  border-bottom: 1px solid #546E7A !important; }

.border-left-blue-grey.border-left-darken-1 {
  border-left: 1px solid #546E7A !important; }

.border-right-blue-grey.border-right-darken-1 {
  border-right: 1px solid #546E7A !important; }

.overlay-blue-grey.overlay-darken-1 {
  background: #546E7A;
  /* The Fallback */
  background: rgba(84, 110, 122, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #546E7A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #546E7A; }

.blue-grey.darken-2 {
  color: #455A64 !important; }

.bg-blue-grey.bg-darken-2 {
  background-color: #455A64 !important; }

.btn-blue-grey.btn-darken-2 {
  border-color: #455A64 !important;
  background-color: #455A64 !important; }
  .btn-blue-grey.btn-darken-2:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-darken-2:focus, .btn-blue-grey.btn-darken-2:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-darken-2 {
  border-color: #455A64 !important;
  color: #455A64 !important; }
  .btn-outline-blue-grey.btn-outline-darken-2:hover {
    background-color: #455A64 !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #455A64 !important; }

.border-blue-grey.border-darken-2 {
  border: 1px solid #455A64 !important; }

.border-top-blue-grey.border-top-darken-2 {
  border-top: 1px solid #455A64 !important; }

.border-bottom-blue-grey.border-bottom-darken-2 {
  border-bottom: 1px solid #455A64 !important; }

.border-left-blue-grey.border-left-darken-2 {
  border-left: 1px solid #455A64 !important; }

.border-right-blue-grey.border-right-darken-2 {
  border-right: 1px solid #455A64 !important; }

.overlay-blue-grey.overlay-darken-2 {
  background: #455A64;
  /* The Fallback */
  background: rgba(69, 90, 100, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #455A64; }

.edit-kanban-item select option.bg-color_name {
  background-color: #455A64; }

.blue-grey.darken-3 {
  color: #37474F !important; }

.bg-blue-grey.bg-darken-3 {
  background-color: #37474F !important; }

.btn-blue-grey.btn-darken-3 {
  border-color: #455A64 !important;
  background-color: #37474F !important; }
  .btn-blue-grey.btn-darken-3:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-darken-3:focus, .btn-blue-grey.btn-darken-3:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-darken-3 {
  border-color: #37474F !important;
  color: #37474F !important; }
  .btn-outline-blue-grey.btn-outline-darken-3:hover {
    background-color: #37474F !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #37474F !important; }

.border-blue-grey.border-darken-3 {
  border: 1px solid #37474F !important; }

.border-top-blue-grey.border-top-darken-3 {
  border-top: 1px solid #37474F !important; }

.border-bottom-blue-grey.border-bottom-darken-3 {
  border-bottom: 1px solid #37474F !important; }

.border-left-blue-grey.border-left-darken-3 {
  border-left: 1px solid #37474F !important; }

.border-right-blue-grey.border-right-darken-3 {
  border-right: 1px solid #37474F !important; }

.overlay-blue-grey.overlay-darken-3 {
  background: #37474F;
  /* The Fallback */
  background: rgba(55, 71, 79, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #37474F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #37474F; }

.blue-grey.darken-4 {
  color: #263238 !important; }

.bg-blue-grey.bg-darken-4 {
  background-color: #263238 !important; }

.btn-blue-grey.btn-darken-4 {
  border-color: #455A64 !important;
  background-color: #263238 !important; }
  .btn-blue-grey.btn-darken-4:hover {
    border-color: #455A64 !important;
    background-color: #37474F !important; }
  .btn-blue-grey.btn-darken-4:focus, .btn-blue-grey.btn-darken-4:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-blue-grey.btn-outline-darken-4 {
  border-color: #263238 !important;
  color: #263238 !important; }
  .btn-outline-blue-grey.btn-outline-darken-4:hover {
    background-color: #263238 !important; }

input:focus ~ .bg-blue-grey {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #263238 !important; }

.border-blue-grey.border-darken-4 {
  border: 1px solid #263238 !important; }

.border-top-blue-grey.border-top-darken-4 {
  border-top: 1px solid #263238 !important; }

.border-bottom-blue-grey.border-bottom-darken-4 {
  border-bottom: 1px solid #263238 !important; }

.border-left-blue-grey.border-left-darken-4 {
  border-left: 1px solid #263238 !important; }

.border-right-blue-grey.border-right-darken-4 {
  border-right: 1px solid #263238 !important; }

.overlay-blue-grey.overlay-darken-4 {
  background: #263238;
  /* The Fallback */
  background: rgba(38, 50, 56, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=blue-grey]:before {
  background-color: #263238; }

.edit-kanban-item select option.bg-color_name {
  background-color: #263238; }

.grey-blue.lighten-5 {
  color: #ECEFF1 !important; }

.bg-grey-blue.bg-lighten-5 {
  background-color: #ECEFF1 !important; }

.btn-grey-blue.btn-lighten-5 {
  border-color: #404E67 !important;
  background-color: #ECEFF1 !important; }
  .btn-grey-blue.btn-lighten-5:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-lighten-5:focus, .btn-grey-blue.btn-lighten-5:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-lighten-5 {
  border-color: #ECEFF1 !important;
  color: #ECEFF1 !important; }
  .btn-outline-grey-blue.btn-outline-lighten-5:hover {
    background-color: #ECEFF1 !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #ECEFF1 !important; }

.border-grey-blue.border-lighten-5 {
  border: 1px solid #ECEFF1 !important; }

.border-top-grey-blue.border-top-lighten-5 {
  border-top: 1px solid #ECEFF1 !important; }

.border-bottom-grey-blue.border-bottom-lighten-5 {
  border-bottom: 1px solid #ECEFF1 !important; }

.border-left-grey-blue.border-left-lighten-5 {
  border-left: 1px solid #ECEFF1 !important; }

.border-right-grey-blue.border-right-lighten-5 {
  border-right: 1px solid #ECEFF1 !important; }

.overlay-grey-blue.overlay-lighten-5 {
  background: #ECEFF1;
  /* The Fallback */
  background: rgba(236, 239, 241, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #ECEFF1; }

.edit-kanban-item select option.bg-color_name {
  background-color: #ECEFF1; }

.grey-blue.lighten-4 {
  color: #CFD8DC !important; }

.bg-grey-blue.bg-lighten-4 {
  background-color: #CFD8DC !important; }

.btn-grey-blue.btn-lighten-4 {
  border-color: #404E67 !important;
  background-color: #CFD8DC !important; }
  .btn-grey-blue.btn-lighten-4:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-lighten-4:focus, .btn-grey-blue.btn-lighten-4:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-lighten-4 {
  border-color: #CFD8DC !important;
  color: #CFD8DC !important; }
  .btn-outline-grey-blue.btn-outline-lighten-4:hover {
    background-color: #CFD8DC !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #CFD8DC !important; }

.border-grey-blue.border-lighten-4 {
  border: 1px solid #CFD8DC !important; }

.border-top-grey-blue.border-top-lighten-4 {
  border-top: 1px solid #CFD8DC !important; }

.border-bottom-grey-blue.border-bottom-lighten-4 {
  border-bottom: 1px solid #CFD8DC !important; }

.border-left-grey-blue.border-left-lighten-4 {
  border-left: 1px solid #CFD8DC !important; }

.border-right-grey-blue.border-right-lighten-4 {
  border-right: 1px solid #CFD8DC !important; }

.overlay-grey-blue.overlay-lighten-4 {
  background: #CFD8DC;
  /* The Fallback */
  background: rgba(207, 216, 220, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #CFD8DC; }

.edit-kanban-item select option.bg-color_name {
  background-color: #CFD8DC; }

.grey-blue.lighten-3 {
  color: #B0BEC5 !important; }

.bg-grey-blue.bg-lighten-3 {
  background-color: #B0BEC5 !important; }

.btn-grey-blue.btn-lighten-3 {
  border-color: #404E67 !important;
  background-color: #B0BEC5 !important; }
  .btn-grey-blue.btn-lighten-3:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-lighten-3:focus, .btn-grey-blue.btn-lighten-3:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-lighten-3 {
  border-color: #B0BEC5 !important;
  color: #B0BEC5 !important; }
  .btn-outline-grey-blue.btn-outline-lighten-3:hover {
    background-color: #B0BEC5 !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #B0BEC5 !important; }

.border-grey-blue.border-lighten-3 {
  border: 1px solid #B0BEC5 !important; }

.border-top-grey-blue.border-top-lighten-3 {
  border-top: 1px solid #B0BEC5 !important; }

.border-bottom-grey-blue.border-bottom-lighten-3 {
  border-bottom: 1px solid #B0BEC5 !important; }

.border-left-grey-blue.border-left-lighten-3 {
  border-left: 1px solid #B0BEC5 !important; }

.border-right-grey-blue.border-right-lighten-3 {
  border-right: 1px solid #B0BEC5 !important; }

.overlay-grey-blue.overlay-lighten-3 {
  background: #B0BEC5;
  /* The Fallback */
  background: rgba(176, 190, 197, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #B0BEC5; }

.edit-kanban-item select option.bg-color_name {
  background-color: #B0BEC5; }

.grey-blue.lighten-2 {
  color: #6F85AD !important; }

.bg-grey-blue.bg-lighten-2 {
  background-color: #6F85AD !important; }

.btn-grey-blue.btn-lighten-2 {
  border-color: #404E67 !important;
  background-color: #6F85AD !important; }
  .btn-grey-blue.btn-lighten-2:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-lighten-2:focus, .btn-grey-blue.btn-lighten-2:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-lighten-2 {
  border-color: #6F85AD !important;
  color: #6F85AD !important; }
  .btn-outline-grey-blue.btn-outline-lighten-2:hover {
    background-color: #6F85AD !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #6F85AD !important; }

.border-grey-blue.border-lighten-2 {
  border: 1px solid #6F85AD !important; }

.border-top-grey-blue.border-top-lighten-2 {
  border-top: 1px solid #6F85AD !important; }

.border-bottom-grey-blue.border-bottom-lighten-2 {
  border-bottom: 1px solid #6F85AD !important; }

.border-left-grey-blue.border-left-lighten-2 {
  border-left: 1px solid #6F85AD !important; }

.border-right-grey-blue.border-right-lighten-2 {
  border-right: 1px solid #6F85AD !important; }

.overlay-grey-blue.overlay-lighten-2 {
  background: #6F85AD;
  /* The Fallback */
  background: rgba(111, 133, 173, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #6F85AD; }

.edit-kanban-item select option.bg-color_name {
  background-color: #6F85AD; }

.grey-blue.lighten-1 {
  color: #78909C !important; }

.bg-grey-blue.bg-lighten-1 {
  background-color: #78909C !important; }

.btn-grey-blue.btn-lighten-1 {
  border-color: #404E67 !important;
  background-color: #78909C !important; }
  .btn-grey-blue.btn-lighten-1:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-lighten-1:focus, .btn-grey-blue.btn-lighten-1:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-lighten-1 {
  border-color: #78909C !important;
  color: #78909C !important; }
  .btn-outline-grey-blue.btn-outline-lighten-1:hover {
    background-color: #78909C !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #78909C !important; }

.border-grey-blue.border-lighten-1 {
  border: 1px solid #78909C !important; }

.border-top-grey-blue.border-top-lighten-1 {
  border-top: 1px solid #78909C !important; }

.border-bottom-grey-blue.border-bottom-lighten-1 {
  border-bottom: 1px solid #78909C !important; }

.border-left-grey-blue.border-left-lighten-1 {
  border-left: 1px solid #78909C !important; }

.border-right-grey-blue.border-right-lighten-1 {
  border-right: 1px solid #78909C !important; }

.overlay-grey-blue.overlay-lighten-1 {
  background: #78909C;
  /* The Fallback */
  background: rgba(120, 144, 156, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #78909C; }

.edit-kanban-item select option.bg-color_name {
  background-color: #78909C; }

.grey-blue {
  color: #1B2942 !important; }

.bg-grey-blue {
  background-color: #1B2942 !important; }
  .bg-grey-blue .card-header,
  .bg-grey-blue .card-footer {
    background-color: transparent; }

.alert-grey-blue {
  border-color: #304875 !important;
  background-color: #304875 !important;
  color: black !important; }
  .alert-grey-blue .alert-link {
    color: black !important; }

.bullet.bullet-grey-blue {
  background-color: #1B2942; }

.bg-light-grey-blue {
  background-color: rgba(27, 41, 66, 0.15); }

.border-grey-blue {
  border-color: #1B2942; }

.bg-grey-blue.badge-glow,
.border-grey-blue.badge-glow {
  box-shadow: 0px 0px 10px #1B2942; }

.overlay-grey-blue {
  background: #1B2942;
  /* The Fallback */
  background: rgba(27, 41, 66, 0.8); }

/* .card-outline-grey-blue{
        border-width: 1px;
        border-style: solid;
        border-color: $color_value;
        background-color: transparent;
        .card-header, .card-footer{
          background-color: transparent;
        }
      } */
.btn-grey-blue {
  border-color: !important;
  background-color: #1B2942 !important;
  color: #FFFFFF; }
  .btn-grey-blue:hover {
    border-color: #546E7A !important;
    background-color: #78909C !important;
    color: #FFF !important; }
  .btn-grey-blue:focus, .btn-grey-blue:active {
    border-color: #404E67 !important;
    background-color: #37474F !important;
    color: #FFF !important; }

.btn-outline-grey-blue {
  border-color: #1B2942;
  background-color: transparent;
  color: #1B2942; }
  .btn-outline-grey-blue:hover {
    background-color: #1B2942;
    color: #FFF !important; }

.widget-timeline .timeline-items.timeline-icon-grey-blue:before {
  background-color: #1B2942; }

input[type="checkbox"].bg-grey-blue + .custom-control-label:before, input[type="radio"].bg-grey-blue + .custom-control-label:before {
  background-color: #1B2942 !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #1B2942 !important; }

.border-grey-blue {
  border: 1px solid #1B2942 !important; }

.border-top-grey-blue {
  border-top: 1px solid #1B2942; }

.border-bottom-grey-blue {
  border-bottom: 1px solid #1B2942; }

.border-left-grey-blue {
  border-left: 1px solid #1B2942; }

.border-right-grey-blue {
  border-right: 1px solid #1B2942; }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #1B2942; }

.edit-kanban-item select option.bg-color_name {
  background-color: #1B2942; }

.grey-blue.darken-1 {
  color: #546E7A !important; }

.bg-grey-blue.bg-darken-1 {
  background-color: #546E7A !important; }

.btn-grey-blue.btn-darken-1 {
  border-color: #404E67 !important;
  background-color: #546E7A !important; }
  .btn-grey-blue.btn-darken-1:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-darken-1:focus, .btn-grey-blue.btn-darken-1:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-darken-1 {
  border-color: #546E7A !important;
  color: #546E7A !important; }
  .btn-outline-grey-blue.btn-outline-darken-1:hover {
    background-color: #546E7A !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #546E7A !important; }

.border-grey-blue.border-darken-1 {
  border: 1px solid #546E7A !important; }

.border-top-grey-blue.border-top-darken-1 {
  border-top: 1px solid #546E7A !important; }

.border-bottom-grey-blue.border-bottom-darken-1 {
  border-bottom: 1px solid #546E7A !important; }

.border-left-grey-blue.border-left-darken-1 {
  border-left: 1px solid #546E7A !important; }

.border-right-grey-blue.border-right-darken-1 {
  border-right: 1px solid #546E7A !important; }

.overlay-grey-blue.overlay-darken-1 {
  background: #546E7A;
  /* The Fallback */
  background: rgba(84, 110, 122, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #546E7A; }

.edit-kanban-item select option.bg-color_name {
  background-color: #546E7A; }

.grey-blue.darken-2 {
  color: #404E67 !important; }

.bg-grey-blue.bg-darken-2 {
  background-color: #404E67 !important; }

.btn-grey-blue.btn-darken-2 {
  border-color: #404E67 !important;
  background-color: #404E67 !important; }
  .btn-grey-blue.btn-darken-2:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-darken-2:focus, .btn-grey-blue.btn-darken-2:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-darken-2 {
  border-color: #404E67 !important;
  color: #404E67 !important; }
  .btn-outline-grey-blue.btn-outline-darken-2:hover {
    background-color: #404E67 !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #404E67 !important; }

.border-grey-blue.border-darken-2 {
  border: 1px solid #404E67 !important; }

.border-top-grey-blue.border-top-darken-2 {
  border-top: 1px solid #404E67 !important; }

.border-bottom-grey-blue.border-bottom-darken-2 {
  border-bottom: 1px solid #404E67 !important; }

.border-left-grey-blue.border-left-darken-2 {
  border-left: 1px solid #404E67 !important; }

.border-right-grey-blue.border-right-darken-2 {
  border-right: 1px solid #404E67 !important; }

.overlay-grey-blue.overlay-darken-2 {
  background: #404E67;
  /* The Fallback */
  background: rgba(64, 78, 103, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #404E67; }

.edit-kanban-item select option.bg-color_name {
  background-color: #404E67; }

.grey-blue.darken-3 {
  color: #37474F !important; }

.bg-grey-blue.bg-darken-3 {
  background-color: #37474F !important; }

.btn-grey-blue.btn-darken-3 {
  border-color: #404E67 !important;
  background-color: #37474F !important; }
  .btn-grey-blue.btn-darken-3:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-darken-3:focus, .btn-grey-blue.btn-darken-3:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-darken-3 {
  border-color: #37474F !important;
  color: #37474F !important; }
  .btn-outline-grey-blue.btn-outline-darken-3:hover {
    background-color: #37474F !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #37474F !important; }

.border-grey-blue.border-darken-3 {
  border: 1px solid #37474F !important; }

.border-top-grey-blue.border-top-darken-3 {
  border-top: 1px solid #37474F !important; }

.border-bottom-grey-blue.border-bottom-darken-3 {
  border-bottom: 1px solid #37474F !important; }

.border-left-grey-blue.border-left-darken-3 {
  border-left: 1px solid #37474F !important; }

.border-right-grey-blue.border-right-darken-3 {
  border-right: 1px solid #37474F !important; }

.overlay-grey-blue.overlay-darken-3 {
  background: #37474F;
  /* The Fallback */
  background: rgba(55, 71, 79, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #37474F; }

.edit-kanban-item select option.bg-color_name {
  background-color: #37474F; }

.grey-blue.darken-4 {
  color: #263238 !important; }

.bg-grey-blue.bg-darken-4 {
  background-color: #263238 !important; }

.btn-grey-blue.btn-darken-4 {
  border-color: #404E67 !important;
  background-color: #263238 !important; }
  .btn-grey-blue.btn-darken-4:hover {
    border-color: #404E67 !important;
    background-color: #37474F !important; }
  .btn-grey-blue.btn-darken-4:focus, .btn-grey-blue.btn-darken-4:active {
    border-color: #37474F !important;
    background-color: #263238 !important; }

.btn-outline-grey-blue.btn-outline-darken-4 {
  border-color: #263238 !important;
  color: #263238 !important; }
  .btn-outline-grey-blue.btn-outline-darken-4:hover {
    background-color: #263238 !important; }

input:focus ~ .bg-grey-blue {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #263238 !important; }

.border-grey-blue.border-darken-4 {
  border: 1px solid #263238 !important; }

.border-top-grey-blue.border-top-darken-4 {
  border-top: 1px solid #263238 !important; }

.border-bottom-grey-blue.border-bottom-darken-4 {
  border-bottom: 1px solid #263238 !important; }

.border-left-grey-blue.border-left-darken-4 {
  border-left: 1px solid #263238 !important; }

.border-right-grey-blue.border-right-darken-4 {
  border-right: 1px solid #263238 !important; }

.overlay-grey-blue.overlay-darken-4 {
  background: #263238;
  /* The Fallback */
  background: rgba(38, 50, 56, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=grey-blue]:before {
  background-color: #263238; }

.edit-kanban-item select option.bg-color_name {
  background-color: #263238; }

.shades.black {
  color: #000000 !important; }

.bg-shades.bg-black {
  background-color: #000000 !important; }

.btn-shades.btn-black {
  border-color: !important;
  background-color: #000000 !important; }
  .btn-shades.btn-black:hover {
    border-color: !important;
    background-color: !important; }
  .btn-shades.btn-black:focus, .btn-shades.btn-black:active {
    border-color: !important;
    background-color: !important; }

.btn-outline-shades.btn-outline-black {
  border-color: #000000 !important;
  color: #000000 !important; }
  .btn-outline-shades.btn-outline-black:hover {
    background-color: #000000 !important; }

input:focus ~ .bg-shades {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000 !important; }

.border-shades.border-black {
  border: 1px solid #000000 !important; }

.border-top-shades.border-top-black {
  border-top: 1px solid #000000 !important; }

.border-bottom-shades.border-bottom-black {
  border-bottom: 1px solid #000000 !important; }

.border-left-shades.border-left-black {
  border-left: 1px solid #000000 !important; }

.border-right-shades.border-right-black {
  border-right: 1px solid #000000 !important; }

.overlay-shades.overlay-black {
  background: #000000;
  /* The Fallback */
  background: rgba(0, 0, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=shades]:before {
  background-color: #000000; }

.edit-kanban-item select option.bg-color_name {
  background-color: #000000; }

.shades.white {
  color: #FFFFFF !important; }

.bg-shades.bg-white {
  background-color: #FFFFFF !important; }

.btn-shades.btn-white {
  border-color: !important;
  background-color: #FFFFFF !important; }
  .btn-shades.btn-white:hover {
    border-color: !important;
    background-color: !important; }
  .btn-shades.btn-white:focus, .btn-shades.btn-white:active {
    border-color: !important;
    background-color: !important; }

.btn-outline-shades.btn-outline-white {
  border-color: #FFFFFF !important;
  color: #FFFFFF !important; }
  .btn-outline-shades.btn-outline-white:hover {
    background-color: #FFFFFF !important; }

input:focus ~ .bg-shades {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFFFF !important; }

.border-shades.border-white {
  border: 1px solid #FFFFFF !important; }

.border-top-shades.border-top-white {
  border-top: 1px solid #FFFFFF !important; }

.border-bottom-shades.border-bottom-white {
  border-bottom: 1px solid #FFFFFF !important; }

.border-left-shades.border-left-white {
  border-left: 1px solid #FFFFFF !important; }

.border-right-shades.border-right-white {
  border-right: 1px solid #FFFFFF !important; }

.overlay-shades.overlay-white {
  background: #FFFFFF;
  /* The Fallback */
  background: rgba(255, 255, 255, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=shades]:before {
  background-color: #FFFFFF; }

.edit-kanban-item select option.bg-color_name {
  background-color: #FFFFFF; }

.shades.transparent {
  color: transparent !important; }

.bg-shades.bg-transparent {
  background-color: transparent !important; }

.btn-shades.btn-transparent {
  border-color: !important;
  background-color: transparent !important; }
  .btn-shades.btn-transparent:hover {
    border-color: !important;
    background-color: !important; }
  .btn-shades.btn-transparent:focus, .btn-shades.btn-transparent:active {
    border-color: !important;
    background-color: !important; }

.btn-outline-shades.btn-outline-transparent {
  border-color: transparent !important;
  color: transparent !important; }
  .btn-outline-shades.btn-outline-transparent:hover {
    background-color: transparent !important; }

input:focus ~ .bg-shades {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem transparent !important; }

.border-shades.border-transparent {
  border: 1px solid transparent !important; }

.border-top-shades.border-top-transparent {
  border-top: 1px solid transparent !important; }

.border-bottom-shades.border-bottom-transparent {
  border-bottom: 1px solid transparent !important; }

.border-left-shades.border-left-transparent {
  border-left: 1px solid transparent !important; }

.border-right-shades.border-right-transparent {
  border-right: 1px solid transparent !important; }

.overlay-shades.overlay-transparent {
  background: transparent;
  /* The Fallback */
  background: rgba(0, 0, 0, 0.8); }

/* Scrumboard Application - kanban-item with coloured border */
/* --------------------------------------------------------- */
.kanban-container .kanban-board .kanban-item[data-border=shades]:before {
  background-color: transparent; }

.edit-kanban-item select option.bg-color_name {
  background-color: transparent; }

.black {
  color: #000000; }

.bg-black {
  background-color: #000000; }

input:focus ~ .bg-black {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #000000; }

.border-black {
  border: 1px solid #000000; }

.border-top-black {
  border-top: 1px solid #000000; }

.border-bottom-black {
  border-bottom: 1px solid #000000; }

.border-left-black {
  border-left: 1px solid #000000; }

.border-right-black {
  border-right: 1px solid #000000; }

.white {
  color: #FFFFFF; }

.bg-white {
  background-color: #FFFFFF; }

input:focus ~ .bg-white {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem #FFFFFF; }

.border-white {
  border: 1px solid #FFFFFF; }

.border-top-white {
  border-top: 1px solid #FFFFFF; }

.border-bottom-white {
  border-bottom: 1px solid #FFFFFF; }

.border-left-white {
  border-left: 1px solid #FFFFFF; }

.border-right-white {
  border-right: 1px solid #FFFFFF; }

.transparent {
  color: transparent; }

.bg-transparent {
  background-color: transparent; }

input:focus ~ .bg-transparent {
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.21rem transparent; }

.border-transparent {
  border: 1px solid transparent; }

.border-top-transparent {
  border-top: 1px solid transparent; }

.border-bottom-transparent {
  border-bottom: 1px solid transparent; }

.border-left-transparent {
  border-left: 1px solid transparent; }

.border-right-transparent {
  border-right: 1px solid transparent; }

html {
  font-size: 14px;
  height: 100%; }
  html body {
    height: 100%;
    background-color: #F5F7FA;
    direction: ltr; }
    html body.fixed-navbar {
      padding-top: 4rem; }
    html body .container.app-content {
      overflow-x: hidden; }
      html body .container.app-content.show-overlay .content-overlay {
        z-index: 10;
        opacity: 1; }
      html body .container.app-content .content-overlay {
        position: fixed;
        opacity: 0;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        cursor: pointer;
        transition: all 0.7s;
        z-index: -1; }
    html body .content {
      padding: 0;
      position: relative;
      transition: 300ms ease all;
      backface-visibility: hidden;
      min-height: calc(100% - 32px); }
      html body .content.app-content {
        overflow-x: hidden; }
        html body .content.app-content.show-overlay .content-overlay {
          z-index: 10;
          opacity: 1; }
        html body .content.app-content .content-overlay {
          position: fixed;
          opacity: 0;
          width: 100%;
          height: 100%;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: rgba(0, 0, 0, 0.5);
          cursor: pointer;
          transition: all 0.7s;
          z-index: -1; }
      html body .content .content-wrapper {
        padding: 1.8rem; }
        html body .content .content-wrapper .content-header-title {
          text-transform: uppercase;
          font-weight: 500;
          letter-spacing: 1px;
          color: #1b2942; }
    html body[data-col="1-column"]:not(.vertical-content-menu) .content,
    html body[data-col="1-column"]:not(.vertical-content-menu) .footer {
      margin-left: 0px !important; }
    html body[data-col="1-column"].horizontal-layout .content,
    html body[data-col="1-column"].horizontal-layout .footer {
      margin: 0 auto !important; }
    html body.boxed-layout {
      padding-left: 0;
      padding-right: 0; }
    html body.bg-full-screen-image {
      background: url(../../app-assets/images/backgrounds/bg-2.jpg) no-repeat center center fixed;
      background-size: cover; }
    html body .pace .pace-progress {
      background: #4ACACC; }
    html body.navbar-static .navbar-container, html body.navbar-sticky .navbar-container {
      padding-left: 1.8rem;
      padding-right: 1rem; }
      html body.navbar-static .navbar-container .search-input .search-list.show, html body.navbar-sticky .navbar-container .search-input .search-list.show {
        width: 98%;
        left: 1%; }

/*
* Blank page
*/
.blank-page .content-wrapper {
  padding: 0 !important; }
  .blank-page .content-wrapper .flexbox-container {
    display: flex;
    align-items: center;
    height: calc(var(--vh, 1vh) * 100); }

.app-content.center-layout {
  overflow: hidden; }

@media (max-width: 767.98px) {
  html body .content .content-wrapper {
    padding: 1rem; }
  html body footer {
    text-align: center; } }

/*
* Col 3 layout for detached and general type
*/
@media (min-width: 992px) {
  body .content-right {
    width: calc(100% - 300px);
    float: right; }
  body .content-left {
    width: calc(100% - 300px);
    float: left; }
  body .content-detached {
    width: 100%; }
    body .content-detached.content-right {
      float: right;
      margin-left: -300px; }
      body .content-detached.content-right .content-body {
        margin-left: 320px; }
    body .content-detached.content-left {
      float: left;
      margin-right: -300px; }
      body .content-detached.content-left .content-body {
        margin-right: 320px; }
  .sidebar-right.sidebar-sticky {
    float: right !important;
    margin-left: -300px;
    width: 300px !important; }
  [data-col="content-left-sidebar"] .sticky-wrapper {
    float: left; } }

/*=========================================================================================
  File Name: sidebar.scss
  Description: content sidebar specific scss.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.center-layout, .sidebar {
  position: relative; }

.sidebar {
  width: 100%; }
  @media (min-width: 992px) {
    .sidebar {
      vertical-align: top;
      width: 300px; } }

.sidebar-fixed {
  position: fixed;
  height: 100%;
  overflow: scroll; }

.sidenav-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: calc(var(--vh, 1vh) * 100);
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 997;
  display: none; }

.drag-target {
  height: 100%;
  width: 40px;
  position: fixed;
  top: 0;
  left: -20px;
  z-index: 1036; }

@media (min-width: 992px) {
  .sidebar-left {
    float: left; }
  .sidebar-right {
    float: right; } }

footer.footer {
  padding: 0.4rem; }

footer.navbar-shadow {
  box-shadow: 0px -1px 4px 0px rgba(0, 0, 0, 0.15); }

footer.navbar-border {
  border-top: 1px solid #E4E7ED; }

footer.footer-transparent {
  border: none; }

footer.footer-light {
  background: #fff; }

footer.footer-dark {
  background: #404E67;
  color: #fff; }

/*=========================================================================================
    File Name: navigations.scss
    Description: Common mixin for menus, contain dark and light version scss.
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.main-menu {
  z-index: 1000;
  position: absolute;
  display: table-cell; }
  .main-menu.menu-light {
    color: #404e67;
    background: #fff;
    border-right: 1px solid #E4E7ED; }
    .main-menu.menu-light .main-menu-header {
      padding: 20px; }
      .main-menu.menu-light .main-menu-header .menu-search {
        background: #e6e6e6;
        padding: 0.5rem 1rem;
        color: #2c3648; }
        .main-menu.menu-light .main-menu-header .menu-search:focus {
          border-color: #d9d9d9; }
    .main-menu.menu-light .navigation {
      background: #fff; }
      .main-menu.menu-light .navigation .navigation-header {
        color: #404e67;
        padding: 24px 20px 8px 20px; }
        .main-menu.menu-light .navigation .navigation-header.open {
          border-left: none; }
        .main-menu.menu-light .navigation .navigation-header span {
          font-weight: 500; }
      .main-menu.menu-light .navigation li a {
        color: #404e67; }
        .main-menu.menu-light .navigation li a span.menu-sub-title {
          color: #8a9ab6; }
      .main-menu.menu-light .navigation li.hover > a, .main-menu.menu-light .navigation li.open > a, .main-menu.menu-light .navigation li.active > a {
        color: #fff; }
      .main-menu.menu-light .navigation li.active {
        border-left: 4px solid #00b5b8; }
      .main-menu.menu-light .navigation li.open .active {
        border-left: none; }
      .main-menu.menu-light .navigation > li {
        padding: 0; }
        .main-menu.menu-light .navigation > li > a {
          padding: 10px 30px 10px 20px; }
          .main-menu.menu-light .navigation > li > a .label {
            margin-top: 4px;
            margin-right: 5px; }
          .main-menu.menu-light .navigation > li > a i {
            position: relative;
            top: 1px;
            margin-top: .2rem; }
        .main-menu.menu-light .navigation > li.open {
          border-left: 4px solid #00b5b8; }
          .main-menu.menu-light .navigation > li.open > a {
            padding-left: 16px !important;
            color: #2c3648;
            background: whitesmoke; }
          .main-menu.menu-light .navigation > li.open ul li > a {
            padding-left: 50px; }
          .main-menu.menu-light .navigation > li.open ul li.active > a {
            padding-left: 50px; }
          .main-menu.menu-light .navigation > li.open ul li.has-sub > ul li > a {
            padding: 8px 18px 8px 64px; }
          .main-menu.menu-light .navigation > li.open ul li.has-sub > ul li.has-sub > ul li > a {
            padding: 8px 18px 8px 74px; }
          .main-menu.menu-light .navigation > li.open .hover > a {
            background: #f0f0f0; }
        .main-menu.menu-light .navigation > li:not(.open) > ul {
          display: none; }
        .main-menu.menu-light .navigation > li:not(.open) ul li.has-sub.open > ul li > a {
          padding-left: 68px; }
        .main-menu.menu-light .navigation > li.hover > a, .main-menu.menu-light .navigation > li:hover > a, .main-menu.menu-light .navigation > li.active > a {
          color: #2c3648;
          background-color: whitesmoke; }
          .main-menu.menu-light .navigation > li.hover > a.mm-next, .main-menu.menu-light .navigation > li:hover > a.mm-next, .main-menu.menu-light .navigation > li.active > a.mm-next {
            background-color: inherit; }
        .main-menu.menu-light .navigation > li.active > a {
          color: #00b5b8;
          border: none;
          font-weight: 400;
          padding-left: 16px; }
        .main-menu.menu-light .navigation > li .active {
          background: #f0f0f0; }
          .main-menu.menu-light .navigation > li .active > a {
            color: #00b5b8;
            font-weight: 500; }
          .main-menu.menu-light .navigation > li .active .hover > a {
            background: whitesmoke; }
        .main-menu.menu-light .navigation > li ul {
          padding: 0;
          margin: 0;
          font-size: 1rem; }
          .main-menu.menu-light .navigation > li ul li {
            color: #404e67;
            background: transparent; }
            .main-menu.menu-light .navigation > li ul li > a {
              padding: 8px 18px 8px 54px; }
          .main-menu.menu-light .navigation > li ul .has-sub:not(.open) > ul {
            display: none; }
          .main-menu.menu-light .navigation > li ul .open > a {
            color: #404e67; }
          .main-menu.menu-light .navigation > li ul .open > ul {
            display: block; }
            .main-menu.menu-light .navigation > li ul .open > ul li > a {
              padding: 8px 18px 8px 64px; }
            .main-menu.menu-light .navigation > li ul .open > ul .open > ul {
              display: block; }
              .main-menu.menu-light .navigation > li ul .open > ul .open > ul li > a {
                padding: 8px 18px 8px 74px; }
          .main-menu.menu-light .navigation > li ul .open .hover > a {
            background: whitesmoke; }
          .main-menu.menu-light .navigation > li ul .hover > a, .main-menu.menu-light .navigation > li ul:hover > a {
            color: #485874;
            background-color: whitesmoke; }
          .main-menu.menu-light .navigation > li ul .active {
            background: transparent; }
            .main-menu.menu-light .navigation > li ul .active > a {
              color: #00b5b8;
              border: none;
              font-weight: 500; }
            .main-menu.menu-light .navigation > li ul .active .hover > a {
              background-color: transparent; }
        .main-menu.menu-light .navigation > li > ul {
          background: #fff; }
    .main-menu.menu-light ul.menu-popout {
      background: #fff; }
      .main-menu.menu-light ul.menu-popout li a {
        color: #404e67; }
        .main-menu.menu-light ul.menu-popout li a span.menu-sub-title {
          color: #8a9ab6; }
      .main-menu.menu-light ul.menu-popout li.hover > a, .main-menu.menu-light ul.menu-popout li:hover > a, .main-menu.menu-light ul.menu-popout li.open > a {
        background: #f0f0f0; }
      .main-menu.menu-light ul.menu-popout .has-sub:not(.open) > ul {
        display: none; }
      .main-menu.menu-light ul.menu-popout .open > a {
        color: #404e67; }
      .main-menu.menu-light ul.menu-popout .open > ul {
        display: block; }
        .main-menu.menu-light ul.menu-popout .open > ul .open {
          background: #e8e8e8; }
          .main-menu.menu-light ul.menu-popout .open > ul .open > ul {
            display: block;
            background: #e8e8e8; }
      .main-menu.menu-light ul.menu-popout .open li.hover > a,
      .main-menu.menu-light ul.menu-popout .open li:hover > a {
        background: whitesmoke; }
      .main-menu.menu-light ul.menu-popout .hover > a, .main-menu.menu-light ul.menu-popout:hover > a {
        color: #485874;
        background-color: whitesmoke; }
      .main-menu.menu-light ul.menu-popout .active {
        background: rgba(0, 0, 0, 0.06); }
        .main-menu.menu-light ul.menu-popout .active > a {
          color: #546686;
          background-color: whitesmoke; }
        .main-menu.menu-light ul.menu-popout .active .hover > a,
        .main-menu.menu-light ul.menu-popout .active :hover > a {
          background-color: transparent; }
  .main-menu.menu-dark {
    color: #dcdcdc;
    background: #404E67; }
    .main-menu.menu-dark .main-menu-header {
      padding: 20px; }
      .main-menu.menu-dark .main-menu-header .menu-search {
        background: #2c3648;
        padding: 0.5rem 1rem;
        color: #c3c3c3; }
        .main-menu.menu-dark .main-menu-header .menu-search:focus {
          border-color: #232a38; }
    .main-menu.menu-dark .navigation {
      background: #404E67; }
      .main-menu.menu-dark .navigation .navigation-header {
        color: #dcdcdc;
        padding: 24px 20px 8px 20px; }
        .main-menu.menu-dark .navigation .navigation-header.open {
          border-left: none; }
        .main-menu.menu-dark .navigation .navigation-header span {
          font-weight: 500; }
      .main-menu.menu-dark .navigation li a {
        color: #dcdcdc; }
        .main-menu.menu-dark .navigation li a span.menu-sub-title {
          color: white; }
      .main-menu.menu-dark .navigation li.hover > a, .main-menu.menu-dark .navigation li.open > a, .main-menu.menu-dark .navigation li.active > a {
        color: #fff; }
      .main-menu.menu-dark .navigation li.active {
        border-left: 4px solid #00b5b8; }
      .main-menu.menu-dark .navigation li.open .active {
        border-left: none; }
      .main-menu.menu-dark .navigation > li {
        padding: 0; }
        .main-menu.menu-dark .navigation > li > a {
          padding: 10px 30px 10px 20px; }
          .main-menu.menu-dark .navigation > li > a .label {
            margin-top: 4px;
            margin-right: 5px; }
          .main-menu.menu-dark .navigation > li > a i {
            position: relative;
            top: 1px;
            margin-top: .2rem; }
        .main-menu.menu-dark .navigation > li.open {
          border-left: 4px solid #00b5b8; }
          .main-menu.menu-dark .navigation > li.open > a {
            padding-left: 16px !important;
            color: #c3c3c3;
            background: #38445a; }
          .main-menu.menu-dark .navigation > li.open ul li > a {
            padding-left: 50px; }
          .main-menu.menu-dark .navigation > li.open ul li.active > a {
            padding-left: 50px; }
          .main-menu.menu-dark .navigation > li.open ul li.has-sub > ul li > a {
            padding: 8px 18px 8px 64px; }
          .main-menu.menu-dark .navigation > li.open ul li.has-sub > ul li.has-sub > ul li > a {
            padding: 8px 18px 8px 74px; }
          .main-menu.menu-dark .navigation > li.open .hover > a {
            background: #344054; }
        .main-menu.menu-dark .navigation > li:not(.open) > ul {
          display: none; }
        .main-menu.menu-dark .navigation > li:not(.open) ul li.has-sub.open > ul li > a {
          padding-left: 68px; }
        .main-menu.menu-dark .navigation > li.hover > a, .main-menu.menu-dark .navigation > li:hover > a, .main-menu.menu-dark .navigation > li.active > a {
          color: #c3c3c3;
          background-color: #38445a; }
          .main-menu.menu-dark .navigation > li.hover > a.mm-next, .main-menu.menu-dark .navigation > li:hover > a.mm-next, .main-menu.menu-dark .navigation > li.active > a.mm-next {
            background-color: inherit; }
        .main-menu.menu-dark .navigation > li.active > a {
          color: #00b5b8;
          border: none;
          font-weight: 400;
          padding-left: 16px; }
        .main-menu.menu-dark .navigation > li .active {
          background: #344054; }
          .main-menu.menu-dark .navigation > li .active > a {
            color: #00b5b8;
            font-weight: 500; }
          .main-menu.menu-dark .navigation > li .active .hover > a {
            background: #38445a; }
        .main-menu.menu-dark .navigation > li ul {
          padding: 0;
          margin: 0;
          font-size: 1rem; }
          .main-menu.menu-dark .navigation > li ul li {
            color: #dcdcdc;
            background: transparent; }
            .main-menu.menu-dark .navigation > li ul li > a {
              padding: 8px 18px 8px 54px; }
          .main-menu.menu-dark .navigation > li ul .has-sub:not(.open) > ul {
            display: none; }
          .main-menu.menu-dark .navigation > li ul .open > a {
            color: #dcdcdc; }
          .main-menu.menu-dark .navigation > li ul .open > ul {
            display: block; }
            .main-menu.menu-dark .navigation > li ul .open > ul li > a {
              padding: 8px 18px 8px 64px; }
            .main-menu.menu-dark .navigation > li ul .open > ul .open > ul {
              display: block; }
              .main-menu.menu-dark .navigation > li ul .open > ul .open > ul li > a {
                padding: 8px 18px 8px 74px; }
          .main-menu.menu-dark .navigation > li ul .open .hover > a {
            background: #38445a; }
          .main-menu.menu-dark .navigation > li ul .hover > a, .main-menu.menu-dark .navigation > li ul:hover > a {
            color: #e6e6e6;
            background-color: #38445a; }
          .main-menu.menu-dark .navigation > li ul .active {
            background: transparent; }
            .main-menu.menu-dark .navigation > li ul .active > a {
              color: #00b5b8;
              border: none;
              font-weight: 500; }
            .main-menu.menu-dark .navigation > li ul .active .hover > a {
              background-color: transparent; }
        .main-menu.menu-dark .navigation > li > ul {
          background: #404E67; }
    .main-menu.menu-dark ul.menu-popout {
      background: #404E67; }
      .main-menu.menu-dark ul.menu-popout li a {
        color: #dcdcdc; }
        .main-menu.menu-dark ul.menu-popout li a span.menu-sub-title {
          color: white; }
      .main-menu.menu-dark ul.menu-popout li.hover > a, .main-menu.menu-dark ul.menu-popout li:hover > a, .main-menu.menu-dark ul.menu-popout li.open > a {
        background: #344054; }
      .main-menu.menu-dark ul.menu-popout .has-sub:not(.open) > ul {
        display: none; }
      .main-menu.menu-dark ul.menu-popout .open > a {
        color: #dcdcdc; }
      .main-menu.menu-dark ul.menu-popout .open > ul {
        display: block; }
        .main-menu.menu-dark ul.menu-popout .open > ul .open {
          background: #2e394b; }
          .main-menu.menu-dark ul.menu-popout .open > ul .open > ul {
            display: block;
            background: #2e394b; }
      .main-menu.menu-dark ul.menu-popout .open li.hover > a,
      .main-menu.menu-dark ul.menu-popout .open li:hover > a {
        background: #38445a; }
      .main-menu.menu-dark ul.menu-popout .hover > a, .main-menu.menu-dark ul.menu-popout:hover > a {
        color: #e6e6e6;
        background-color: #38445a; }
      .main-menu.menu-dark ul.menu-popout .active {
        background: rgba(0, 0, 0, 0.06); }
        .main-menu.menu-dark ul.menu-popout .active > a {
          color: #f6f6f6;
          background-color: #38445a; }
        .main-menu.menu-dark ul.menu-popout .active .hover > a,
        .main-menu.menu-dark ul.menu-popout .active :hover > a {
          background-color: transparent; }
  .main-menu.menu-fixed {
    position: fixed;
    height: 100%;
    /* fallback if needed */
    top: 4rem;
    height: calc(100% - 4rem); }
    .main-menu.menu-fixed .main-menu-footer {
      position: fixed; }
  .main-menu.menu-shadow {
    box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.1); }
  .main-menu.menu-border {
    border-right: 1px solid #E4E7ED; }
  .main-menu.menu-native-scroll .main-menu-content {
    overflow-y: scroll; }
  .main-menu.menu-bordered.menu-light .navigation > li {
    border-top: 1px solid #E4E7ED; }
  .main-menu.menu-bordered.menu-dark .navigation > li {
    border-top: 1px solid rgba(255, 255, 255, 0.1); }
  .main-menu .main-menu-content {
    height: 100% !important;
    position: relative; }
  .main-menu ul {
    list-style: none;
    margin: 0;
    padding: 0; }
    .main-menu ul.navigation-main {
      overflow-x: hidden; }
  .main-menu a {
    outline: none; }
    .main-menu a:hover, .main-menu a:focus {
      text-decoration: none; }
  .main-menu ul.navigation li.has-sub.changing li.active {
    border-left: none; }

.navigation {
  font-size: 1rem;
  font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
  font-weight: 300;
  overflow-y: hidden;
  padding-bottom: 20px; }
  .navigation .navigation-header {
    font-family: "Montserrat", Georgia, "Times New Roman", Times, serif;
    font-weight: 400;
    line-height: 1.2;
    padding: 12px 22px;
    font-size: 1rem;
    text-transform: uppercase; }
  .navigation li {
    position: relative;
    white-space: nowrap; }
    .navigation li a {
      display: block;
      /* white-space: nowrap; */
      text-overflow: ellipsis;
      overflow: hidden; }
    .navigation li.disabled a {
      cursor: not-allowed; }

.menu-popout li.disabled a {
  cursor: not-allowed; }

.dropdown-notification .notification-text {
  margin-bottom: 0.5rem; }

.dropdown-notification .notification-tag {
  position: relative;
  top: -4px; }

.main-menu-header .user-content {
  padding: 20px; }
  .main-menu-header .user-content .media {
    overflow: inherit; }
  .main-menu-header .user-content .media-body {
    vertical-align: bottom;
    opacity: 1;
    width: 150px;
    white-space: nowrap;
    transition: all .3s ease .15s; }

.main-menu-footer {
  position: relative;
  overflow: hidden;
  bottom: 0;
  display: block;
  z-index: 1000;
  color: #e8ebf1;
  background-color: #2c3648; }
  .main-menu-footer.footer-open {
    max-height: 500px;
    transition: max-height 0.2s ease-in-out; }
  .main-menu-footer.footer-close {
    max-height: 15px;
    transition: max-height 0.2s ease-in-out; }
  .main-menu-footer a {
    color: #c9d0dd; }
    .main-menu-footer a:hover, .main-menu-footer a:focus {
      color: #fff; }
  .main-menu-footer .header {
    height: 19px;
    border-bottom: 1px solid #364257; }
  .main-menu-footer .toggle {
    transform: rotate(0deg);
    transition: -webkit-transform 0.2s ease-in-out; }
  .main-menu-footer .content {
    padding: 0; }
    .main-menu-footer .content .actions > a {
      display: block;
      float: left;
      width: 33.33333%;
      padding: 1rem 0;
      color: #c9d0dd;
      text-align: center;
      border-top: 1px solid #364257;
      border-left: 1px solid #364257; }
      .main-menu-footer .content .actions > a > span {
        font-size: 1.35rem; }
      .main-menu-footer .content .actions > a:hover, .main-menu-footer .content .actions > a:focus {
        color: #fff; }

body.vertical-layout.vertical-menu.menu-expanded .main-menu-footer .content {
  margin-left: 0; }

.vertical-layout.menu-expanded .menu-icon-right ul.navigation li > a:after,
.vertical-overlay-menu .menu-icon-right ul.navigation li > a:after {
  left: 8px;
  right: initial !important; }

.vertical-layout.menu-expanded .menu-icon-right ul.navigation li > a > i,
.vertical-overlay-menu .menu-icon-right ul.navigation li > a > i {
  float: right !important;
  margin: 0px -12px 0px 0px !important; }

.horizontal-layout .navbar-icon-right ul.nav > li > a:after {
  float: left;
  position: relative;
  top: 27px;
  left: -16px; }

.horizontal-layout .navbar-icon-right ul.nav > li > a > i {
  float: right;
  margin: 0px 4px 0 8px; }

.horizontal-layout .navbar-fixed {
  z-index: 999 !important; }

@media (max-width: 767.98px) {
  .menu-hide .main-menu,
  .menu-open .main-menu {
    transition: transform .25s, top .35s, height .35s; }
  .main-menu {
    transform: translate3d(-240px, 0, 0);
    backface-visibility: hidden;
    perspective: 1000; }
  .menu-open .main-menu {
    transform: translate3d(0, 0, 0); } }

@media (max-width: 991.98px) {
  .horizontal-layout.vertical-overlay-menu .main-menu-content {
    padding: 0; }
    .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu {
      margin: 0;
      width: 100%; }
      .horizontal-layout.vertical-overlay-menu .main-menu-content .mega-dropdown-menu > li {
        padding: 0; }
  .horizontal-layout.vertical-overlay-menu .navbar .navbar-container {
    margin-left: 0px;
    max-width: 100%; } }

@media (min-width: 768px) {
  .drag-target {
    z-index: 0; } }

.display-inline {
  display: inline !important; }

.display-block {
  display: block !important; }

.display-inline-block {
  display: inline-block !important; }

.display-hidden {
  display: none !important; }

.display-table-cell {
  display: table-cell !important; }

.position-top-0 {
  top: 0; }

.position-right-0 {
  right: 0; }

.position-bottom-0 {
  bottom: 0; }

.position-left-0 {
  left: 0; }

.zindex-1 {
  z-index: 1 !important; }

.zindex-2 {
  z-index: 2 !important; }

.zindex-3 {
  z-index: 3 !important; }

.zindex-4 {
  z-index: 4 !important; }

.zindex-0 {
  z-index: 0 !important; }

.zindex-minus-1 {
  z-index: -1 !important; }

.zindex-minus-2 {
  z-index: -2 !important; }

.zindex-minus-3 {
  z-index: -3 !important; }

.zindex-minus-4 {
  z-index: -4 !important; }

.no-edge-top {
  top: 0 !important; }

.no-edge-bottom {
  bottom: 0 !important; }

.no-edge-left {
  left: 0 !important; }

.no-edge-right {
  right: 0 !important; }

.cursor-pointer {
  cursor: pointer; }

.cursor-move {
  cursor: move; }

.cursor-default {
  cursor: default; }

.cursor-progress {
  cursor: progress; }

.cursor-not-allowed {
  cursor: not-allowed; }

.overflow-hidden {
  overflow: hidden; }

.overflow-visible {
  overflow: visible; }

.overflow-auto {
  overflow: auto; }

.overflow-scroll {
  overflow: scroll; }

.overflow-x-scroll {
  overflow: scroll; }

.overflow-y-scroll {
  overflow: scroll; }

.bullets-inside {
  list-style: inside; }

.list-style-circle {
  list-style: circle; }

.list-style-square {
  list-style: square; }

.list-style-icons {
  padding-left: 10px;
  margin-left: 0;
  list-style: none; }
  .list-style-icons > li i {
    float: left;
    width: 1em;
    margin: 0 6px 0 0; }

.border {
  border: 1px solid; }

.border-top {
  border-top: 1px solid; }

.border-bottom {
  border-bottom: 1px solid; }

.border-left {
  border-left: 1px solid; }

.border-right {
  border-right: 1px solid; }

.border-2 {
  border-width: 2px !important; }

.border-top-2 {
  border-top-width: 2px !important; }

.border-bottom-2 {
  border-bottom-width: 2px !important; }

.border-left-2 {
  border-left-width: 2px !important; }

.border-right-2 {
  border-right-width: 2px !important; }

.border-3 {
  border-width: 3px !important; }

.border-top-3 {
  border-top-width: 3px !important; }

.border-bottom-3 {
  border-bottom-width: 3px !important; }

.border-left-3 {
  border-left-width: 3px !important; }

.border-right-3 {
  border-right-width: 3px !important; }

.no-border-top-radius {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important; }

.no-border-bottom-radius {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important; }

.no-border-top-left-radius {
  border-top-left-radius: 0 !important; }

.no-border-top-right-radius {
  border-top-right-radius: 0 !important; }

.no-border-bottom-left-radius {
  border-bottom-left-radius: 0 !important; }

.no-border-bottom-right-radius {
  border-bottom-right-radius: 0 !important; }

.box-shadow-0 {
  box-shadow: none !important; }

.box-shadow-1 {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

.box-shadow-2 {
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); }

.box-shadow-3 {
  box-shadow: 0 12px 15px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19); }

.box-shadow-4 {
  box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.22), 0 25px 55px 0 rgba(0, 0, 0, 0.21); }

.box-shadow-5 {
  box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22); }

.fit {
  max-width: 100% !important; }

.half-width {
  width: 50% !important; }

.full-width {
  width: 100% !important; }

.full-height {
  height: 100% !important; }

.width-50 {
  width: 50px !important; }

.width-100 {
  width: 100px !important; }

.width-150 {
  width: 150px !important; }

.width-200 {
  width: 200px !important; }

.width-250 {
  width: 250px !important; }

.width-300 {
  width: 300px !important; }

.width-350 {
  width: 350px !important; }

.width-400 {
  width: 400px !important; }

.width-450 {
  width: 450px !important; }

.width-500 {
  width: 500px !important; }

.width-550 {
  width: 550px !important; }

.width-600 {
  width: 600px !important; }

.width-650 {
  width: 650px !important; }

.width-700 {
  width: 700px !important; }

.width-750 {
  width: 750px !important; }

.width-800 {
  width: 800px !important; }

.width-5-per {
  width: 5% !important; }

.width-10-per {
  width: 10% !important; }

.width-15-per {
  width: 15% !important; }

.width-20-per {
  width: 20% !important; }

.width-25-per {
  width: 25% !important; }

.width-30-per {
  width: 30% !important; }

.width-35-per {
  width: 35% !important; }

.width-40-per {
  width: 40% !important; }

.width-45-per {
  width: 45% !important; }

.width-50-per {
  width: 50% !important; }

.width-55-per {
  width: 55% !important; }

.width-60-per {
  width: 60% !important; }

.width-65-per {
  width: 65% !important; }

.width-70-per {
  width: 70% !important; }

.width-75-per {
  width: 75% !important; }

.width-80-per {
  width: 80% !important; }

.width-90-per {
  width: 90% !important; }

.width-95-per {
  width: 95% !important; }

.height-50 {
  height: 50px !important; }

.height-75 {
  height: 75px !important; }

.height-100 {
  height: 100px !important; }

.height-150 {
  height: 150px !important; }

.height-200 {
  height: 200px !important; }

.height-250 {
  height: 250px !important; }

.height-300 {
  height: 300px !important; }

.height-350 {
  height: 350px !important; }

.height-400 {
  height: 400px !important; }

.height-450 {
  height: 450px !important; }

.height-500 {
  height: 500px !important; }

.height-550 {
  height: 550px !important; }

.height-600 {
  height: 600px !important; }

.height-650 {
  height: 650px !important; }

.height-700 {
  height: 700px !important; }

.height-750 {
  height: 750px !important; }

.height-800 {
  height: 800px !important; }

.height-5-per {
  height: 5% !important; }

.height-10-per {
  height: 10% !important; }

.height-15-per {
  height: 15% !important; }

.height-20-per {
  height: 20% !important; }

.height-25-per {
  height: 25% !important; }

.height-30-per {
  height: 30% !important; }

.height-35-per {
  height: 35% !important; }

.height-40-per {
  height: 40% !important; }

.height-45-per {
  height: 45% !important; }

.height-50-per {
  height: 50% !important; }

.height-55-per {
  height: 55% !important; }

.height-60-per {
  height: 60% !important; }

.height-65-per {
  height: 65% !important; }

.height-70-per {
  height: 70% !important; }

.height-75-per {
  height: 75% !important; }

.height-80-per {
  height: 80% !important; }

.full-height-vh-with-nav {
  height: calc(var(--vh, 1vh) * 100 - 4rem - 4rem); }

.full-height-vh {
  height: calc(var(--vh, 1vh) * 100); }

.line-height-1 {
  line-height: 1 !important; }

.line-height-2 {
  line-height: 2 !important; }

.rotate-45 {
  transform: rotate(45deg); }

.rotate-45-inverse {
  transform: rotate(-45deg); }

.rotate-90 {
  transform: rotate(45deg); }

.rotate-90-inverse {
  transform: rotate(-45deg); }

.rotate-180 {
  transform: rotate(45deg); }

.rotate-180-inverse {
  transform: rotate(-45deg); }

.spinner {
  display: inline-block;
  animation: spin 1s linear infinite; }

@keyframes spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }

.spinner-reverse {
  display: inline-block;
  animation: spin-reverse 1s linear infinite; }

@keyframes spin-reverse {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(-360deg); } }

.bg-cover {
  background-size: cover !important; }

.background-repeat {
  background-repeat: repeat !important; }

.background-no-repeat {
  background-repeat: no-repeat !important; }

.img-xl {
  width: 64px !important;
  height: 64px !important; }

.img-lg {
  width: 44px !important;
  height: 44px !important; }

.img-sm {
  width: 36px !important;
  height: 36px !important; }

.img-xs {
  width: 32px !important;
  height: 32px !important; }

/* Pull The Element */
.pull-up {
  transition: all 0.25s ease; }
  .pull-up:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0px 14px 24px rgba(62, 57, 107, 0.2);
    z-index: 30;
    cursor: pointer; }

.avatar {
  position: relative;
  white-space: nowrap;
  border-radius: 50%;
  vertical-align: middle;
  height: 32px;
  width: 32px;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  justify-content: center;
  align-items: center; }
  .avatar .badge-up {
    position: absolute;
    right: -8px;
    top: -8px; }
  .avatar[class*=avatar-] i {
    border-radius: 50%;
    width: 11px;
    height: 11px;
    position: absolute;
    right: -2px;
    bottom: 0;
    border: 1px solid #fff; }
  .avatar.avatar-away i {
    background-color: #ffa87d; }
  .avatar.avatar-busy i {
    background-color: #ff7588; }
  .avatar.avatar-offline i {
    background-color: #babfc7; }
  .avatar.avatar-online i {
    background-color: #16d39a; }
  .avatar img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0 none;
    border-radius: 50%; }
  .avatar.avatar-xl {
    width: 70px;
    height: 70px;
    font-size: 1.5rem; }
    .avatar.avatar-xl[class*=avatar-] i {
      width: 20px;
      height: 20px; }
  .avatar.avatar-lg {
    width: 50px;
    height: 50px;
    font-size: 1.2rem; }
    .avatar.avatar-lg[class*=avatar-] i {
      width: 15px;
      height: 15px; }
  .avatar.avatar-sm {
    width: 24px;
    height: 24px;
    font-size: 1rem; }
    .avatar.avatar-sm[class*=avatar-] i {
      width: 7px;
      height: 7px; }

/*=========================================================================================
  File Name: search.scss
  Description: Search  functionality.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.navbar-container a.nav-link-search {
  float: left; }

.navbar-container .search-input {
  position: relative;
  float: left;
  width: 0; }
  .navbar-container .search-input .input {
    width: 0;
    border: none;
    background: none;
    line-height: 16px;
    padding: 1.4rem 2.7rem; }
  .navbar-container .search-input.open {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 1001;
    margin-top: 0px;
    box-shadow: 6px 12px 18px 0 rgba(25, 42, 70, 0.13); }
    .navbar-container .search-input.open .search-input-close,
    .navbar-container .search-input.open .search-input-icon {
      display: block; }
    .navbar-container .search-input.open input {
      width: 100%;
      outline: none;
      background: none;
      padding-top: 1.45rem; }
  .navbar-container .search-input .search-list {
    position: absolute;
    top: 100%;
    left: 0;
    background: #fff;
    width: 60rem;
    margin-top: 0.5rem;
    padding-left: 0;
    border-radius: 0.25rem;
    display: none; }
    .navbar-container .search-input .search-list.show {
      display: block;
      width: 98%;
      left: 1%; }
    .navbar-container .search-input .search-list li a {
      padding: 1.2rem 1rem;
      color: #404e67; }
      .navbar-container .search-input .search-list li a span[class*="bx bx-"] {
        font-size: 1.25rem; }
    .navbar-container .search-input .search-list li:first-child {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem; }
    .navbar-container .search-input .search-list li:last-child {
      border-bottom-left-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem; }
    .navbar-container .search-input .search-list li:hover, .navbar-container .search-input .search-list li.current_item {
      background-color: #f2f4f4; }
  .navbar-container .search-input .search-input-close {
    z-index: 1001;
    display: none;
    position: absolute;
    right: 1rem;
    top: 40%;
    cursor: pointer;
    color: #fff; }

.navbar-light .search-input .input,
.navbar-semi-dark .search-input .input {
  color: #404E67;
  display: none; }

.navbar-light .search-input.open .input,
.navbar-semi-dark .search-input.open .input {
  color: #404E67;
  border-bottom: 1px solid #e0e2e8;
  background-color: #fff;
  display: block; }

.navbar-light .search-input.open .search-input-close,
.navbar-semi-dark .search-input.open .search-input-close {
  color: #2a2e30; }

.navbar-dark .search-input .input,
.navbar-semi-light .search-input .input {
  color: #404E67; }

.navbar-dark .search-input.open .input,
.navbar-semi-light .search-input.open .input {
  color: #404E67;
  background-color: #fff; }
  .navbar-dark .search-input.open .input::placeholder,
  .navbar-semi-light .search-input.open .input::placeholder {
    color: #404E67; }

.navbar-dark .search-input.open .search-input-close,
.navbar-semi-light .search-input.open .search-input-close {
  color: #404E67; }

@media (max-width: 767.98px) {
  #navbar-mobile .search-input.open .input {
    color: #fff; } }

.chart-container {
  position: relative;
  width: 100%; }

@media (max-width: 768px) {
  .chart-container {
    overflow-x: scroll;
    overflow-y: visible;
    max-width: 100%; } }

.chart {
  position: relative;
  display: block;
  width: 100%; }

.jqstooltip {
  box-sizing: content-box; }

[class*="bs-callout"] p {
  letter-spacing: 0.6px; }

[class*="bs-callout"] .media {
  border-radius: 0.25rem !important; }

[class*="bs-callout"].callout-bordered {
  border: 1px solid #ddd; }

[class*="bs-callout"].callout-border-left {
  border-left: 5px solid; }

[class*="bs-callout"].callout-border-right {
  border-right: 5px solid; }

[class*="bs-callout"] .callout-arrow-left {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }
  [class*="bs-callout"] .callout-arrow-left:before {
    content: "";
    display: inline-block;
    position: absolute;
    top: 50%;
    right: -11%;
    border-left: 8px solid;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left-color: inherit;
    margin-top: -8px; }

[class*="bs-callout"] .callout-arrow-right {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }
  [class*="bs-callout"] .callout-arrow-right:before {
    content: "";
    display: inline-block;
    position: absolute;
    top: 50%;
    left: -11%;
    border-left: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left-color: inherit;
    border-right: 8px solid;
    border-right-color: inherit;
    margin-top: -8px; }

[class*="bs-callout"].callout-round {
  border-radius: 5rem !important; }
  [class*="bs-callout"].callout-round .media-left {
    border-top-left-radius: 5rem;
    border-bottom-left-radius: 5rem; }
  [class*="bs-callout"].callout-round .media-right {
    border-top-right-radius: 5rem;
    border-bottom-right-radius: 5rem; }

[class*="bs-callout"].callout-square {
  border-radius: 0 !important; }
  [class*="bs-callout"].callout-square .media, [class*="bs-callout"].callout-square .callout-arrow-left, [class*="bs-callout"].callout-square .callout-arrow-right {
    border-radius: 0 !important; }

.btn-social, .btn-social-icon {
  position: relative;
  padding-left: 3.95rem;
  text-align: left;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis; }
  .btn-social > :first-child, .btn-social-icon > :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 2.95rem;
    line-height: 2.7rem;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0, 0, 0, 0.2); }
  .btn-social.btn-lg, .btn-lg.btn-social-icon {
    padding-left: 3.25rem; }
    .btn-social.btn-lg > :first-child, .btn-lg.btn-social-icon > :first-child {
      line-height: 3.7rem;
      width: 3rem;
      font-size: 1.8em; }
  .btn-social.btn-sm, .btn-sm.btn-social-icon {
    padding-left: 3.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem; }
    .btn-social.btn-sm > :first-child, .btn-sm.btn-social-icon > :first-child {
      line-height: 2.5rem;
      width: 3rem;
      font-size: 1.4em; }
  .btn-social.btn-xs, .btn-xs.btn-social-icon {
    padding-left: 2rem;
    font-size: 0.75rem;
    line-height: 0.2rem; }
    .btn-social.btn-xs > :first-child, .btn-xs.btn-social-icon > :first-child {
      line-height: 2rem;
      width: 1.8rem;
      font-size: 1.2em; }

.btn-social-icon {
  height: 2.95rem;
  width: 2.95rem;
  padding: 0; }
  .btn-social-icon > :first-child {
    border: none;
    text-align: center;
    width: 100% !important; }
  .btn-social-icon.btn-lg {
    height: 4rem;
    width: 4rem;
    padding-left: 0;
    padding-right: 0; }
  .btn-social-icon.btn-sm {
    height: 2.5rem;
    width: 2.5rem;
    padding-left: 0;
    padding-right: 0; }
  .btn-social-icon.btn-xs {
    height: 2rem;
    width: 2rem;
    padding-left: 0;
    padding-right: 0; }

.btn-adn {
  background-color: #d87a68;
  color: #fff;
  background-color: #d87a68;
  border-color: #fff; }
  .btn-adn:hover {
    color: #fff;
    background-color: #d87a68;
    border-color: #d87a68; }
  .btn-adn:focus, .btn-adn.focus {
    color: #fff;
    background-color: #d87a68;
    border-color: #d87a68;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-adn.disabled, .btn-adn:disabled {
    color: #fff;
    background-color: #d87a68;
    border-color: #fff; }
  .btn-adn:not(:disabled):not(.disabled):active, .btn-adn:not(:disabled):not(.disabled).active,
  .show > .btn-adn.dropdown-toggle {
    color: #fff;
    background-color: #ce563f;
    border-color: #dfdfdf; }
    .btn-adn:not(:disabled):not(.disabled):active:focus, .btn-adn:not(:disabled):not(.disabled).active:focus,
    .show > .btn-adn.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-bitbucket {
  background-color: #205081;
  color: #fff;
  background-color: #205081;
  border-color: #fff; }
  .btn-bitbucket:hover {
    color: #fff;
    background-color: #205081;
    border-color: #205081; }
  .btn-bitbucket:focus, .btn-bitbucket.focus {
    color: #fff;
    background-color: #205081;
    border-color: #205081;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-bitbucket.disabled, .btn-bitbucket:disabled {
    color: #fff;
    background-color: #205081;
    border-color: #fff; }
  .btn-bitbucket:not(:disabled):not(.disabled):active, .btn-bitbucket:not(:disabled):not(.disabled).active,
  .show > .btn-bitbucket.dropdown-toggle {
    color: #fff;
    background-color: #163758;
    border-color: #dfdfdf; }
    .btn-bitbucket:not(:disabled):not(.disabled):active:focus, .btn-bitbucket:not(:disabled):not(.disabled).active:focus,
    .show > .btn-bitbucket.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-dropbox {
  background-color: #1087dd;
  color: #fff;
  background-color: #1087dd;
  border-color: #fff; }
  .btn-dropbox:hover {
    color: #fff;
    background-color: #1087dd;
    border-color: #1087dd; }
  .btn-dropbox:focus, .btn-dropbox.focus {
    color: #fff;
    background-color: #1087dd;
    border-color: #1087dd;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-dropbox.disabled, .btn-dropbox:disabled {
    color: #fff;
    background-color: #1087dd;
    border-color: #fff; }
  .btn-dropbox:not(:disabled):not(.disabled):active, .btn-dropbox:not(:disabled):not(.disabled).active,
  .show > .btn-dropbox.dropdown-toggle {
    color: #fff;
    background-color: #0d6aad;
    border-color: #dfdfdf; }
    .btn-dropbox:not(:disabled):not(.disabled):active:focus, .btn-dropbox:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dropbox.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-facebook {
  background-color: #3b5998;
  color: #fff;
  background-color: #3b5998;
  border-color: #fff; }
  .btn-facebook:hover {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998; }
  .btn-facebook:focus, .btn-facebook.focus {
    color: #fff;
    background-color: #3b5998;
    border-color: #3b5998;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-facebook.disabled, .btn-facebook:disabled {
    color: #fff;
    background-color: #3b5998;
    border-color: #fff; }
  .btn-facebook:not(:disabled):not(.disabled):active, .btn-facebook:not(:disabled):not(.disabled).active,
  .show > .btn-facebook.dropdown-toggle {
    color: #fff;
    background-color: #2d4373;
    border-color: #dfdfdf; }
    .btn-facebook:not(:disabled):not(.disabled):active:focus, .btn-facebook:not(:disabled):not(.disabled).active:focus,
    .show > .btn-facebook.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-flickr {
  background-color: #ff0084;
  color: #fff;
  background-color: #ff0084;
  border-color: #fff; }
  .btn-flickr:hover {
    color: #fff;
    background-color: #ff0084;
    border-color: #ff0084; }
  .btn-flickr:focus, .btn-flickr.focus {
    color: #fff;
    background-color: #ff0084;
    border-color: #ff0084;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-flickr.disabled, .btn-flickr:disabled {
    color: #fff;
    background-color: #ff0084;
    border-color: #fff; }
  .btn-flickr:not(:disabled):not(.disabled):active, .btn-flickr:not(:disabled):not(.disabled).active,
  .show > .btn-flickr.dropdown-toggle {
    color: #fff;
    background-color: #cc006a;
    border-color: #dfdfdf; }
    .btn-flickr:not(:disabled):not(.disabled):active:focus, .btn-flickr:not(:disabled):not(.disabled).active:focus,
    .show > .btn-flickr.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-foursquare {
  background-color: #f94877;
  color: #fff;
  background-color: #f94877;
  border-color: #fff; }
  .btn-foursquare:hover {
    color: #fff;
    background-color: #f94877;
    border-color: #f94877; }
  .btn-foursquare:focus, .btn-foursquare.focus {
    color: #fff;
    background-color: #f94877;
    border-color: #f94877;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-foursquare.disabled, .btn-foursquare:disabled {
    color: #fff;
    background-color: #f94877;
    border-color: #fff; }
  .btn-foursquare:not(:disabled):not(.disabled):active, .btn-foursquare:not(:disabled):not(.disabled).active,
  .show > .btn-foursquare.dropdown-toggle {
    color: #fff;
    background-color: #f71752;
    border-color: #dfdfdf; }
    .btn-foursquare:not(:disabled):not(.disabled):active:focus, .btn-foursquare:not(:disabled):not(.disabled).active:focus,
    .show > .btn-foursquare.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-github {
  background-color: #444444;
  color: #fff;
  background-color: #444444;
  border-color: #fff; }
  .btn-github:hover {
    color: #fff;
    background-color: #444444;
    border-color: #444444; }
  .btn-github:focus, .btn-github.focus {
    color: #fff;
    background-color: #444444;
    border-color: #444444;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-github.disabled, .btn-github:disabled {
    color: #fff;
    background-color: #444444;
    border-color: #fff; }
  .btn-github:not(:disabled):not(.disabled):active, .btn-github:not(:disabled):not(.disabled).active,
  .show > .btn-github.dropdown-toggle {
    color: #fff;
    background-color: #2b2b2b;
    border-color: #dfdfdf; }
    .btn-github:not(:disabled):not(.disabled):active:focus, .btn-github:not(:disabled):not(.disabled).active:focus,
    .show > .btn-github.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-google {
  background-color: #dd4b39;
  color: #fff;
  background-color: #dd4b39;
  border-color: #fff; }
  .btn-google:hover {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39; }
  .btn-google:focus, .btn-google.focus {
    color: #fff;
    background-color: #dd4b39;
    border-color: #dd4b39;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-google.disabled, .btn-google:disabled {
    color: #fff;
    background-color: #dd4b39;
    border-color: #fff; }
  .btn-google:not(:disabled):not(.disabled):active, .btn-google:not(:disabled):not(.disabled).active,
  .show > .btn-google.dropdown-toggle {
    color: #fff;
    background-color: #c23321;
    border-color: #dfdfdf; }
    .btn-google:not(:disabled):not(.disabled):active:focus, .btn-google:not(:disabled):not(.disabled).active:focus,
    .show > .btn-google.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-instagram {
  background-color: #3f729b;
  color: #fff;
  background-color: #3f729b;
  border-color: #fff; }
  .btn-instagram:hover {
    color: #fff;
    background-color: #3f729b;
    border-color: #3f729b; }
  .btn-instagram:focus, .btn-instagram.focus {
    color: #fff;
    background-color: #3f729b;
    border-color: #3f729b;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-instagram.disabled, .btn-instagram:disabled {
    color: #fff;
    background-color: #3f729b;
    border-color: #fff; }
  .btn-instagram:not(:disabled):not(.disabled):active, .btn-instagram:not(:disabled):not(.disabled).active,
  .show > .btn-instagram.dropdown-toggle {
    color: #fff;
    background-color: #305777;
    border-color: #dfdfdf; }
    .btn-instagram:not(:disabled):not(.disabled):active:focus, .btn-instagram:not(:disabled):not(.disabled).active:focus,
    .show > .btn-instagram.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-linkedin {
  background-color: #007bb6;
  color: #fff;
  background-color: #007bb6;
  border-color: #fff; }
  .btn-linkedin:hover {
    color: #fff;
    background-color: #007bb6;
    border-color: #007bb6; }
  .btn-linkedin:focus, .btn-linkedin.focus {
    color: #fff;
    background-color: #007bb6;
    border-color: #007bb6;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-linkedin.disabled, .btn-linkedin:disabled {
    color: #fff;
    background-color: #007bb6;
    border-color: #fff; }
  .btn-linkedin:not(:disabled):not(.disabled):active, .btn-linkedin:not(:disabled):not(.disabled).active,
  .show > .btn-linkedin.dropdown-toggle {
    color: #fff;
    background-color: #005983;
    border-color: #dfdfdf; }
    .btn-linkedin:not(:disabled):not(.disabled):active:focus, .btn-linkedin:not(:disabled):not(.disabled).active:focus,
    .show > .btn-linkedin.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-microsoft {
  background-color: #2672ec;
  color: #fff;
  background-color: #2672ec;
  border-color: #fff; }
  .btn-microsoft:hover {
    color: #fff;
    background-color: #2672ec;
    border-color: #2672ec; }
  .btn-microsoft:focus, .btn-microsoft.focus {
    color: #fff;
    background-color: #2672ec;
    border-color: #2672ec;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-microsoft.disabled, .btn-microsoft:disabled {
    color: #fff;
    background-color: #2672ec;
    border-color: #fff; }
  .btn-microsoft:not(:disabled):not(.disabled):active, .btn-microsoft:not(:disabled):not(.disabled).active,
  .show > .btn-microsoft.dropdown-toggle {
    color: #fff;
    background-color: #125acd;
    border-color: #dfdfdf; }
    .btn-microsoft:not(:disabled):not(.disabled):active:focus, .btn-microsoft:not(:disabled):not(.disabled).active:focus,
    .show > .btn-microsoft.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-odnoklassniki {
  background-color: #f4731c;
  color: #fff;
  background-color: #f4731c;
  border-color: #fff; }
  .btn-odnoklassniki:hover {
    color: #fff;
    background-color: #f4731c;
    border-color: #f4731c; }
  .btn-odnoklassniki:focus, .btn-odnoklassniki.focus {
    color: #fff;
    background-color: #f4731c;
    border-color: #f4731c;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-odnoklassniki.disabled, .btn-odnoklassniki:disabled {
    color: #fff;
    background-color: #f4731c;
    border-color: #fff; }
  .btn-odnoklassniki:not(:disabled):not(.disabled):active, .btn-odnoklassniki:not(:disabled):not(.disabled).active,
  .show > .btn-odnoklassniki.dropdown-toggle {
    color: #fff;
    background-color: #d35b0a;
    border-color: #dfdfdf; }
    .btn-odnoklassniki:not(:disabled):not(.disabled):active:focus, .btn-odnoklassniki:not(:disabled):not(.disabled).active:focus,
    .show > .btn-odnoklassniki.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-openid {
  background-color: #f7931e;
  color: #2a2e30;
  background-color: #f7931e;
  border-color: #fff; }
  .btn-openid:hover {
    color: #2a2e30;
    background-color: #f7931e;
    border-color: #f7931e; }
  .btn-openid:focus, .btn-openid.focus {
    color: #2a2e30;
    background-color: #f7931e;
    border-color: #f7931e;
    box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }
  .btn-openid.disabled, .btn-openid:disabled {
    color: #2a2e30;
    background-color: #f7931e;
    border-color: #fff; }
  .btn-openid:not(:disabled):not(.disabled):active, .btn-openid:not(:disabled):not(.disabled).active,
  .show > .btn-openid.dropdown-toggle {
    color: #fff;
    background-color: #da7908;
    border-color: #dfdfdf; }
    .btn-openid:not(:disabled):not(.disabled):active:focus, .btn-openid:not(:disabled):not(.disabled).active:focus,
    .show > .btn-openid.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }

.btn-pinterest {
  background-color: #cb2027;
  color: #fff;
  background-color: #cb2027;
  border-color: #fff; }
  .btn-pinterest:hover {
    color: #fff;
    background-color: #cb2027;
    border-color: #cb2027; }
  .btn-pinterest:focus, .btn-pinterest.focus {
    color: #fff;
    background-color: #cb2027;
    border-color: #cb2027;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-pinterest.disabled, .btn-pinterest:disabled {
    color: #fff;
    background-color: #cb2027;
    border-color: #fff; }
  .btn-pinterest:not(:disabled):not(.disabled):active, .btn-pinterest:not(:disabled):not(.disabled).active,
  .show > .btn-pinterest.dropdown-toggle {
    color: #fff;
    background-color: #9f191f;
    border-color: #dfdfdf; }
    .btn-pinterest:not(:disabled):not(.disabled):active:focus, .btn-pinterest:not(:disabled):not(.disabled).active:focus,
    .show > .btn-pinterest.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-reddit {
  background-color: #eff7ff;
  color: #2a2e30;
  background-color: #eff7ff;
  border-color: #000; }
  .btn-reddit:hover {
    color: #fff;
    background-color: #000;
    border-color: #000; }
  .btn-reddit:focus, .btn-reddit.focus {
    color: #fff;
    background-color: #000;
    border-color: #000;
    box-shadow: 0 0 0 0.2rem rgba(6, 7, 7, 0.5); }
  .btn-reddit.disabled, .btn-reddit:disabled {
    color: #2a2e30;
    background-color: #eff7ff;
    border-color: #000; }
  .btn-reddit:not(:disabled):not(.disabled):active, .btn-reddit:not(:disabled):not(.disabled).active,
  .show > .btn-reddit.dropdown-toggle {
    color: #2a2e30;
    background-color: #bcdeff;
    border-color: black; }
    .btn-reddit:not(:disabled):not(.disabled):active:focus, .btn-reddit:not(:disabled):not(.disabled).active:focus,
    .show > .btn-reddit.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(6, 7, 7, 0.5); }

.btn-soundcloud {
  background-color: #ff5500;
  color: #fff;
  background-color: #ff5500;
  border-color: #fff; }
  .btn-soundcloud:hover {
    color: #fff;
    background-color: #ff5500;
    border-color: #ff5500; }
  .btn-soundcloud:focus, .btn-soundcloud.focus {
    color: #fff;
    background-color: #ff5500;
    border-color: #ff5500;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-soundcloud.disabled, .btn-soundcloud:disabled {
    color: #fff;
    background-color: #ff5500;
    border-color: #fff; }
  .btn-soundcloud:not(:disabled):not(.disabled):active, .btn-soundcloud:not(:disabled):not(.disabled).active,
  .show > .btn-soundcloud.dropdown-toggle {
    color: #fff;
    background-color: #cc4400;
    border-color: #dfdfdf; }
    .btn-soundcloud:not(:disabled):not(.disabled):active:focus, .btn-soundcloud:not(:disabled):not(.disabled).active:focus,
    .show > .btn-soundcloud.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-tumblr {
  background-color: #2c4762;
  color: #fff;
  background-color: #2c4762;
  border-color: #fff; }
  .btn-tumblr:hover {
    color: #fff;
    background-color: #2c4762;
    border-color: #2c4762; }
  .btn-tumblr:focus, .btn-tumblr.focus {
    color: #fff;
    background-color: #2c4762;
    border-color: #2c4762;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-tumblr.disabled, .btn-tumblr:disabled {
    color: #fff;
    background-color: #2c4762;
    border-color: #fff; }
  .btn-tumblr:not(:disabled):not(.disabled):active, .btn-tumblr:not(:disabled):not(.disabled).active,
  .show > .btn-tumblr.dropdown-toggle {
    color: #fff;
    background-color: #1c2e3f;
    border-color: #dfdfdf; }
    .btn-tumblr:not(:disabled):not(.disabled):active:focus, .btn-tumblr:not(:disabled):not(.disabled).active:focus,
    .show > .btn-tumblr.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-twitter {
  background-color: #55acee;
  color: #2a2e30;
  background-color: #55acee;
  border-color: #fff; }
  .btn-twitter:hover {
    color: #2a2e30;
    background-color: #55acee;
    border-color: #55acee; }
  .btn-twitter:focus, .btn-twitter.focus {
    color: #2a2e30;
    background-color: #55acee;
    border-color: #55acee;
    box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }
  .btn-twitter.disabled, .btn-twitter:disabled {
    color: #2a2e30;
    background-color: #55acee;
    border-color: #fff; }
  .btn-twitter:not(:disabled):not(.disabled):active, .btn-twitter:not(:disabled):not(.disabled).active,
  .show > .btn-twitter.dropdown-toggle {
    color: #fff;
    background-color: #2795e9;
    border-color: #dfdfdf; }
    .btn-twitter:not(:disabled):not(.disabled):active:focus, .btn-twitter:not(:disabled):not(.disabled).active:focus,
    .show > .btn-twitter.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(223, 224, 224, 0.5); }

.btn-vimeo {
  background-color: #1ab7ea;
  color: #fff;
  background-color: #1ab7ea;
  border-color: #fff; }
  .btn-vimeo:hover {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #1ab7ea; }
  .btn-vimeo:focus, .btn-vimeo.focus {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #1ab7ea;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-vimeo.disabled, .btn-vimeo:disabled {
    color: #fff;
    background-color: #1ab7ea;
    border-color: #fff; }
  .btn-vimeo:not(:disabled):not(.disabled):active, .btn-vimeo:not(:disabled):not(.disabled).active,
  .show > .btn-vimeo.dropdown-toggle {
    color: #fff;
    background-color: #1295bf;
    border-color: #dfdfdf; }
    .btn-vimeo:not(:disabled):not(.disabled):active:focus, .btn-vimeo:not(:disabled):not(.disabled).active:focus,
    .show > .btn-vimeo.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-vk {
  background-color: #587ea3;
  color: #fff;
  background-color: #587ea3;
  border-color: #fff; }
  .btn-vk:hover {
    color: #fff;
    background-color: #587ea3;
    border-color: #587ea3; }
  .btn-vk:focus, .btn-vk.focus {
    color: #fff;
    background-color: #587ea3;
    border-color: #587ea3;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-vk.disabled, .btn-vk:disabled {
    color: #fff;
    background-color: #587ea3;
    border-color: #fff; }
  .btn-vk:not(:disabled):not(.disabled):active, .btn-vk:not(:disabled):not(.disabled).active,
  .show > .btn-vk.dropdown-toggle {
    color: #fff;
    background-color: #466482;
    border-color: #dfdfdf; }
    .btn-vk:not(:disabled):not(.disabled):active:focus, .btn-vk:not(:disabled):not(.disabled).active:focus,
    .show > .btn-vk.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-yahoo {
  background-color: #720e9e;
  color: #fff;
  background-color: #720e9e;
  border-color: #fff; }
  .btn-yahoo:hover {
    color: #fff;
    background-color: #720e9e;
    border-color: #720e9e; }
  .btn-yahoo:focus, .btn-yahoo.focus {
    color: #fff;
    background-color: #720e9e;
    border-color: #720e9e;
    box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }
  .btn-yahoo.disabled, .btn-yahoo:disabled {
    color: #fff;
    background-color: #720e9e;
    border-color: #fff; }
  .btn-yahoo:not(:disabled):not(.disabled):active, .btn-yahoo:not(:disabled):not(.disabled).active,
  .show > .btn-yahoo.dropdown-toggle {
    color: #fff;
    background-color: #500a6f;
    border-color: #dfdfdf; }
    .btn-yahoo:not(:disabled):not(.disabled):active:focus, .btn-yahoo:not(:disabled):not(.disabled).active:focus,
    .show > .btn-yahoo.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5); }

.btn-outline-adn {
  border: 1px solid #d87a68 !important;
  color: #d87a68; }

.btn-outline-bitbucket {
  border: 1px solid #205081 !important;
  color: #205081; }

.btn-outline-dropbox {
  border: 1px solid #1087dd !important;
  color: #1087dd; }

.btn-outline-facebook {
  border: 1px solid #3b5998 !important;
  color: #3b5998; }

.btn-outline-flickr {
  border: 1px solid #ff0084 !important;
  color: #ff0084; }

.btn-outline-foursquare {
  border: 1px solid #f94877 !important;
  color: #f94877; }

.btn-outline-github {
  border: 1px solid #444444 !important;
  color: #444444; }

.btn-outline-google {
  border: 1px solid #dd4b39 !important;
  color: #dd4b39; }

.btn-outline-instagram {
  border: 1px solid #3f729b !important;
  color: #3f729b; }

.btn-outline-linkedin {
  border: 1px solid #007bb6 !important;
  color: #007bb6; }

.btn-outline-microsoft {
  border: 1px solid #2672ec !important;
  color: #2672ec; }

.btn-outline-odnoklassniki {
  border: 1px solid #f4731c !important;
  color: #f4731c; }

.btn-outline-openid {
  border: 1px solid #f7931e !important;
  color: #f7931e; }

.btn-outline-pinterest {
  border: 1px solid #cb2027 !important;
  color: #cb2027; }

.btn-outline-reddit {
  border: 1px solid #ff4500 !important;
  color: #ff4500; }

.btn-outline-soundcloud {
  border: 1px solid #ff5500 !important;
  color: #ff5500; }

.btn-outline-tumblr {
  border: 1px solid #2c4762 !important;
  color: #2c4762; }

.btn-outline-twitter {
  border: 1px solid #55acee !important;
  color: #55acee; }

.btn-outline-vimeo {
  border: 1px solid #1ab7ea !important;
  color: #1ab7ea; }

.btn-outline-vk {
  border: 1px solid #587ea3 !important;
  color: #587ea3; }

.btn-outline-yahoo {
  border: 1px solid #720e9e !important;
  color: #720e9e; }

.btn-outline-adn:hover {
  color: #ad412d;
  border: 1px solid #ad412d !important; }

.btn-outline-bitbucket:hover {
  color: #0c1d2f;
  border: 1px solid #0c1d2f !important; }

.btn-outline-dropbox:hover {
  color: #094d7e;
  border: 1px solid #094d7e !important; }

.btn-outline-facebook:hover {
  color: #1e2e4f;
  border: 1px solid #1e2e4f !important; }

.btn-outline-flickr:hover {
  color: #99004f;
  border: 1px solid #99004f !important; }

.btn-outline-foursquare:hover {
  color: #d4073d;
  border: 1px solid #d4073d !important; }

.btn-outline-github:hover {
  color: #111111;
  border: 1px solid #111111 !important; }

.btn-outline-google:hover {
  color: #96271a;
  border: 1px solid #96271a !important; }

.btn-outline-instagram:hover {
  color: #223d52;
  border: 1px solid #223d52 !important; }

.btn-outline-linkedin:hover {
  color: #003650;
  border: 1px solid #003650 !important; }

.btn-outline-microsoft:hover {
  color: #0e459e;
  border: 1px solid #0e459e !important; }

.btn-outline-odnoklassniki:hover {
  color: #a24608;
  border: 1px solid #a24608 !important; }

.btn-outline-openid:hover {
  color: #a95e06;
  border: 1px solid #a95e06 !important; }

.btn-outline-pinterest:hover {
  color: #731216;
  border: 1px solid #731216 !important; }

.btn-outline-reddit:hover {
  color: #992900;
  border: 1px solid #992900 !important; }

.btn-outline-soundcloud:hover {
  color: #993300;
  border: 1px solid #993300 !important; }

.btn-outline-tumblr:hover {
  color: #0c141c;
  border: 1px solid #0c141c !important; }

.btn-outline-twitter:hover {
  color: #147bc9;
  border: 1px solid #147bc9 !important; }

.btn-outline-vimeo:hover {
  color: #0d7091;
  border: 1px solid #0d7091 !important; }

.btn-outline-vk:hover {
  color: #344b61;
  border: 1px solid #344b61 !important; }

.btn-outline-yahoo:hover {
  color: #2e0640;
  border: 1px solid #2e0640 !important; }

.bg-adn {
  background-color: #d87a68; }

.bg-bitbucket {
  background-color: #205081; }

.bg-dropbox {
  background-color: #1087dd; }

.bg-facebook {
  background-color: #3b5998; }

.bg-flickr {
  background-color: #ff0084; }

.bg-foursquare {
  background-color: #f94877; }

.bg-github {
  background-color: #444444; }

.bg-google {
  background-color: #dd4b39; }

.bg-instagram {
  background-color: #3f729b; }

.bg-linkedin {
  background-color: #007bb6; }

.bg-microsoft {
  background-color: #2672ec; }

.bg-odnoklassniki {
  background-color: #f4731c; }

.bg-openid {
  background-color: #f7931e; }

.bg-pinterest {
  background-color: #cb2027; }

.bg-reddit {
  background-color: #ff4500; }

.bg-soundcloud {
  background-color: #ff5500; }

.bg-tumblr {
  background-color: #2c4762; }

.bg-twitter {
  background-color: #55acee; }

.bg-vimeo {
  background-color: #1ab7ea; }

.bg-vk {
  background-color: #587ea3; }

.bg-yahoo {
  background-color: #720e9e; }

/*=========================================================================================
  File Name: demo.scss
  Description: CSS used for demo purpose only. Remove this css from your project.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.fonticon-container > .fonticon-wrap {
  float: left;
  width: 60px;
  height: 60px;
  line-height: 4.8rem;
  text-align: center;
  border-radius: 0.1875rem;
  margin-right: 1rem;
  margin-bottom: 1.5rem; }
  .fonticon-container > .fonticon-wrap > i {
    font-size: 2.28rem;
    transition: all .2s ease-in-out; }
  .fonticon-container > .fonticon-wrap.youtube {
    width: 100px; }

.fonticon-container:hover i {
  color: #00b5b8;
  font-size: 2.9rem;
  transform: scale(1.3); }

.fonticon-container > .fonticon-classname, .fonticon-container > .fonticon-unit {
  display: block;
  font-size: 1.5rem;
  line-height: 1.2; }

.fonticon-container > .fonticon-unit {
  font-size: 1rem;
  font-style: italic; }

.scroll-example {
  padding: 0.5rem;
  position: relative;
  border: 2px solid #d3dce9;
  overflow: auto; }
  .scroll-example .horz-scroll-content {
    width: 1200px; }

.browser {
  background: #e0e0e0;
  border: 4px solid #e0e0e0;
  width: 100%;
  height: 12rem;
  padding-top: 20px;
  margin: 0 0 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

.browser iframe {
  border: 0;
  background: #fff;
  height: 100%;
  width: 100%; }

.loader-wrapper {
  height: 8em; }

.maintenance-icon {
  font-size: 4rem; }

.animationIcon {
  right: 30px;
  bottom: 10px; }

/*=========================================================================================
  File Name: customizer.scss
  Description: CSS used for demo purpose only. Remove this css from your project.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.customizer {
  width: 400px;
  right: -400px;
  padding: 0;
  background-color: #FFF;
  z-index: 1051;
  position: fixed;
  top: 0;
  bottom: 0;
  height: calc(var(--vh, 1vh) * 100);
  transition: right 0.4s cubic-bezier(0.05, 0.74, 0.2, 0.99);
  backface-visibility: hidden;
  border-left: 1px solid rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.1); }
  .customizer.open {
    right: 0; }
  .customizer .customizer-content {
    position: relative;
    height: 100%; }
  .customizer a.customizer-toggle {
    background: #FFF;
    color: #00b5b8;
    display: block;
    box-shadow: -3px 0px 8px rgba(0, 0, 0, 0.1); }
  .customizer a.customizer-close {
    color: #000; }
  .customizer .customizer-close {
    position: absolute;
    right: 10px;
    top: 10px;
    padding: 7px;
    width: auto;
    z-index: 10; }
  .customizer .customizer-toggle {
    position: absolute;
    top: 35%;
    width: 54px;
    height: 50px;
    left: -54px;
    text-align: center;
    line-height: 56px;
    cursor: pointer; }
  .customizer .color-options a {
    white-space: pre; }
  .customizer .customizer-sidebar-options .active {
    background-color: #00b5b8;
    border-color: #00b5b8;
    color: #FFF; }

.buy-now {
  position: fixed;
  bottom: 5%;
  right: 2%;
  z-index: 1031; }

@media screen and (min-width: 0px) {
  head {
    font-family: "xs 0px"; }
  body:after {
    content: "xs - min-width: 0px"; } }

@media screen and (min-width: 544px) {
  head {
    font-family: "sm 544px"; }
  body:after {
    content: "sm - min-width: 544px"; } }

@media screen and (min-width: 768px) {
  head {
    font-family: "md 768px"; }
  body:after {
    content: "md - min-width: 768px"; } }

@media screen and (min-width: 992px) {
  head {
    font-family: "lg 992px"; }
  body:after {
    content: "lg - min-width: 992px"; } }

@media screen and (min-width: 1200px) {
  head {
    font-family: "xl 1200px"; }
  body:after {
    content: "xl - min-width: 1200px"; } }

head {
  clear: both; }
  head title {
    font-family: "xs 0px, sm 544px, md 768px, lg 992px, xl 1200px"; }

body:after {
  display: none; }

*[data-usn-if] {
  display: none; }

.group-area {
  margin-bottom: 3rem; }

.block {
  display: block;
  width: 100%; }

/* Input with icon */
.has-icon-left .form-control {
  padding-left: 2.5rem; }

.form-control-position {
  position: absolute;
  top: 4px;
  right: 0;
  z-index: 2;
  display: block;
  width: 2.5rem;
  height: 2.5rem;
  line-height: 2.5rem;
  text-align: center; }

/*---------------------------------
Input Icon
---------------------------------*/
.position-relative .form-control {
  padding-right: calc(2.75rem + 2px); }
  .position-relative .form-control.form-control-lg ~ .form-control-position {
    top: 10px; }
  .position-relative .form-control.form-control-sm ~ .form-control-position {
    top: -3px; }

/* Input Icon left */
.has-icon-left .form-control {
  padding-right: 1rem;
  padding-left: calc(2.75rem + 2px); }

.has-icon-left .form-control-position {
  right: auto;
  left: inherit; }

input[type="color"] {
  height: calc(2.75rem + 2px); }

input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
  line-height: 1.45; }

.font-size-large {
  font-size: 1.25rem; }

.font-size-base {
  font-size: 1rem; }

.font-size-small {
  font-size: 0.875rem; }

.font-size-xsmall {
  font-size: 0.75rem; }

.input-group-xs .form-control,
.input-group-xs .input-group-addon,
.input-group-xs .input-group-btn > button {
  padding: 0.175rem 0.5rem;
  font-size: 0.725rem;
  line-height: 1.677777;
  border-bottom-left-radius: 0.175rem;
  border-top-left-radius: 0.175rem;
  height: 2rem; }

.input-group-xs .input-group-btn > button {
  border-radius: 0.175rem; }

.input-group-xs > .form-control,
.input-group-xs > .custom-select,
.input-group-xs > .input-group-prepend > .input-group-text,
.input-group-xs > .input-group-append > .input-group-text,
.input-group-xs > .input-group-prepend > .btn,
.input-group-xs > .input-group-append > .btn {
  padding: 0.25rem 0.75rem;
  font-size: .75rem; }

.input-group-addon {
  padding-top: 0.2rem;
  padding-bottom: 0.2rem; }

.floating-label-form-group-with-focus label,
.floating-label-form-group-with-value label {
  color: #00b5b8 !important;
  text-transform: uppercase;
  font-weight: 400; }

.select2-container--classic:focus,
.select2-container--default:focus {
  outline: none; }

.select2-container--classic .img-flag,
.select2-container--default .img-flag {
  height: 15px;
  width: 18px; }

.select2-container--classic .select2-selection--single,
.select2-container--default .select2-selection--single {
  height: 40px !important;
  padding: 5px; }
  .select2-container--classic .select2-selection--single .select2-selection__rendered i,
  .select2-container--default .select2-selection--single .select2-selection__rendered i {
    margin-right: 0.5rem; }

.select2-container--classic.select2-container--open .select2-selection--single,
.select2-container--default.select2-container--open .select2-selection--single {
  border-color: #CCCCCC !important;
  outline: 0; }

.select2-container--classic.select2-container--focus,
.select2-container--default.select2-container--focus {
  outline: 0; }
  .select2-container--classic.select2-container--focus .select2-selection--multiple,
  .select2-container--default.select2-container--focus .select2-selection--multiple {
    border-color: #CCCCCC !important;
    outline: 0; }

.select2-container--classic .select2-selection--multiple,
.select2-container--default .select2-selection--multiple {
  min-height: 40px !important;
  padding: 5px 8px !important; }
  .select2-container--classic .select2-selection--multiple .select2-selection__choice,
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    padding: 2px 10px !important;
    margin-top: 0px !important;
    background-color: #00b5b8 !important;
    border: none;
    color: #fff;
    margin-right: 8px !important; }
  .select2-container--classic .select2-selection--multiple .select2-selection__rendered,
  .select2-container--default .select2-selection--multiple .select2-selection__rendered {
    display: block !important;
    padding: 0 !important; }
  .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove,
  .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: #fff !important;
    float: right;
    margin-left: 0.5rem; }
  .select2-container--classic .select2-selection--multiple i,
  .select2-container--default .select2-selection--multiple i {
    position: relative;
    top: 1px;
    margin-right: 0.5rem;
    padding-left: 1px; }
  .select2-container--classic .select2-selection--multiple[class*=bg-] .select2-selection__choice,
  .select2-container--default .select2-selection--multiple[class*=bg-] .select2-selection__choice {
    background-color: rgba(0, 0, 0, 0.15) !important;
    border-color: rgba(0, 0, 0, 0.2) !important; }

.select2-container--classic .select2-results__options .select2-results__option i,
.select2-container--default .select2-results__options .select2-results__option i {
  margin-right: 0.5rem; }

.select2-container--classic .select2-results__options .select2-results__option[aria-selected=true],
.select2-container--default .select2-results__options .select2-results__option[aria-selected=true] {
  background-color: #00b5b8 !important;
  color: #fff !important; }

.select2-container--classic .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #E0E0E0 !important;
  color: #424242 !important; }

.select2-container--classic .select2-result-repository .select2-result-repository__avatar,
.select2-container--default .select2-result-repository .select2-result-repository__avatar {
  width: 22%;
  float: left; }
  .select2-container--classic .select2-result-repository .select2-result-repository__avatar img,
  .select2-container--default .select2-result-repository .select2-result-repository__avatar img {
    width: 75px; }

.select2-container--classic .select2-result-repository .select2-result-repository__meta,
.select2-container--default .select2-result-repository .select2-result-repository__meta {
  width: 78%;
  float: right; }
  .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__title,
  .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__title {
    font-size: 1.35rem;
    font-weight: 700;
    text-transform: capitalize; }
  .select2-container--classic .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div,
  .select2-container--default .select2-result-repository .select2-result-repository__meta .select2-result-repository__statistics div {
    display: inline;
    margin-right: 1rem; }

.select2-container--classic .select-lg,
.select2-container--default .select-lg {
  height: calc(3.5625rem + 2px) !important;
  font-size: 1.25rem;
  margin-bottom: 0 !important;
  padding: 0.75rem 0; }
  .select2-container--classic .select-lg.select2-selection--single .select2-selection__rendered,
  .select2-container--default .select-lg.select2-selection--single .select2-selection__rendered {
    padding-top: 0.1rem;
    padding-left: 0.75rem;
    padding-right: 5rem; }
  .select2-container--classic .select-lg.select2-selection--single .select2-selection__arrow,
  .select2-container--default .select-lg.select2-selection--single .select2-selection__arrow {
    top: 0.75rem !important; }
  .select2-container--classic .select-lg.select2-selection--multiple .select2-selection__choice,
  .select2-container--default .select-lg.select2-selection--multiple .select2-selection__choice {
    padding: 0.2rem 0.5rem !important;
    font-size: 1.25rem; }
  .select2-container--classic .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field,
  .select2-container--default .select-lg.select2-selection--multiple .select2-search--inline .select2-search__field {
    padding: 0;
    font-size: 1.25rem; }

.select2-container--classic .select-sm,
.select2-container--default .select-sm {
  height: 2.5rem !important;
  font-size: 0.875rem;
  padding: 0.1rem 0.2rem;
  margin-bottom: 0 !important; }
  .select2-container--classic .select-sm.select2-selection--single .select2-selection__rendered,
  .select2-container--default .select-sm.select2-selection--single .select2-selection__rendered {
    padding-left: 0.5rem;
    padding-right: 5rem; }
  .select2-container--classic .select-sm.select2-selection--single .select2-selection__arrow,
  .select2-container--default .select-sm.select2-selection--single .select2-selection__arrow {
    top: 0.25rem !important; }
  .select2-container--classic .select-sm.select2-selection--multiple,
  .select2-container--default .select-sm.select2-selection--multiple {
    min-height: 2.5rem !important;
    padding: 0.25rem 0.25rem !important; }
    .select2-container--classic .select-sm.select2-selection--multiple .select2-selection__rendered,
    .select2-container--default .select-sm.select2-selection--multiple .select2-selection__rendered {
      padding-left: 0.25rem !important; }
    .select2-container--classic .select-sm.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-sm.select2-selection--multiple .select2-selection__choice {
      padding: 0 0.25rem !important;
      font-size: 0.875rem; }
    .select2-container--classic .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-sm.select2-selection--multiple .select2-search--inline .select2-search__field {
      padding: 0.1rem 0;
      margin-top: 0; }

.select2-container--classic .select-xs,
.select2-container--default .select-xs {
  height: 2rem !important;
  padding: 0 0.2rem;
  font-size: 0.75rem;
  margin-bottom: 0 !important;
  line-height: 1.5; }
  .select2-container--classic .select-xs.select2-selection--single .select2-selection__rendered,
  .select2-container--default .select-xs.select2-selection--single .select2-selection__rendered {
    padding-left: 0.525rem;
    padding-right: 4.55rem; }
  .select2-container--classic .select-xs.select2-selection--single .select2-selection__arrow,
  .select2-container--default .select-xs.select2-selection--single .select2-selection__arrow {
    top: 0.175rem !important; }
  .select2-container--classic .select-xs.select2-selection--multiple,
  .select2-container--default .select-xs.select2-selection--multiple {
    min-height: 2rem !important;
    padding: 3px 4px !important; }
    .select2-container--classic .select-xs.select2-selection--multiple .select2-selection__choice,
    .select2-container--default .select-xs.select2-selection--multiple .select2-selection__choice {
      padding: 0 0.4rem !important;
      font-size: 0.75rem; }
    .select2-container--classic .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field,
    .select2-container--default .select-xs.select2-selection--multiple .select2-search--inline .select2-search__field {
      padding: 0;
      font-size: 0.75rem;
      margin-top: 0; }

.select2-container--default .select2-selection--single .select2-selection__arrow {
  top: 6px !important;
  right: 6px !important; }

.select2-container--classic .select2-selection--single .select2-selection__arrow {
  top: 1px !important;
  right: 2px !important;
  height: 96% !important; }

table.dataTable, .dataTables_wrapper {
  border-spacing: 0px; }
  table.dataTable thead th, table.dataTable.no-footer th, .dataTables_wrapper thead th, .dataTables_wrapper.no-footer th {
    border-bottom: transparent; }
  table.dataTable tfoot th, .dataTables_wrapper tfoot th {
    border-top: transparent; }

.content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before, .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
  background-color: #00b5b8;
  border-radius: 0;
  top: 10px;
  left: 10px;
  box-shadow: 0 0 2px #444; }

.content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr.parent > td:first-child:before, .content-wrapper table.dataTable.dtr-inline.collapsed > tbody > tr.parent > th:first-child:before {
  background-color: #ff7588; }

.DTFC_LeftBodyLiner {
  top: -1px !important; }

div.dataTables_wrapper {
  width: 100%; }
  div.dataTables_wrapper div.dataTables_paginate .paginate_button {
    margin-left: 0;
    padding: 0;
    border: none !important; }
    div.dataTables_wrapper div.dataTables_paginate .paginate_button:hover {
      background: none;
      border: 1px solid transparent; }
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    margin: 10px 0;
    justify-content: flex-end; }
  div.dataTables_wrapper div.dataTables_length select, div.dataTables_wrapper div.dataTables_filter input {
    width: auto;
    display: inline-block; }
  div.dataTables_wrapper div.dataTables_length select {
    background: none;
    background-image: url("../images/pages/arrow-down.png");
    background-position: 86% 57%;
    background-repeat: no-repeat;
    background-size: 12px 10px; }
  div.dataTables_wrapper div .dataTables_scroll .dataTables_scrollBody {
    border-bottom: transparent; }
    div.dataTables_wrapper div .dataTables_scroll .dataTables_scrollBody > .table {
      margin: 0; }
  div.dataTables_wrapper div .top .dataTables_info, div.dataTables_wrapper div .top .dataTables_filter, div.dataTables_wrapper div .top .dataTables_length, div.dataTables_wrapper div .bottom .dataTables_info, div.dataTables_wrapper div .bottom .dataTables_filter, div.dataTables_wrapper div .bottom .dataTables_length {
    float: none; }

td.highlight {
  font-weight: bold;
  color: #00b5b8;
  background-color: #fff !important; }

tr.group {
  background-color: #ededed !important; }
  tr.group:hover {
    background-color: #ededed !important; }

th {
  white-space: nowrap; }

.toolbar {
  float: left; }

.no-style thead > tr > th, .no-style tfoot > tr > th {
  border-bottom: 1px solid #e3ebf3; }

table.dataTable.compact tbody td {
  padding: 4px; }

table.dataTable.no-footer {
  border-bottom-color: #E6E6E6; }

.table-striped tbody tr.odd.selected, .table-striped tbody tr.even.selected {
  background-color: #00b5b8;
  color: #fff; }

table.dataTable tbody > tr > .selected {
  background-color: #00b5b8;
  color: #fff; }

a.dt-button.red {
  color: red; }

a.dt-button.orange {
  color: orange; }

a.dt-button.green {
  color: green; }

.dataex-css-row tr {
  height: 55px; }

.dataex-key-customstyling td.focus {
  outline: 1px solid #ac1212;
  outline-offset: -3px;
  background-color: #e3ebf3 !important; }

.dt-events-log {
  border: 1px solid #888;
  background: #f7f7f7;
  padding: 1em;
  margin-bottom: 1em; }

.dataTables_wrapper tfoot input {
  width: 100%;
  box-sizing: border-box; }

td.details-control {
  background: url("../images/datatables/resources/details_open.png") no-repeat center center;
  cursor: pointer; }

tr.shown td.details-control {
  background: url("../images/datatables/resources/details_close.png") no-repeat center center; }

.DTFC_LeftBodyLiner, .DTFC_RightBodyLiner {
  background: white; }

div.table-responsive > div.dataTables_wrapper > div.row {
  margin: 0; }

@media screen and (max-width: 600px) {
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    justify-content: center; } }

@media screen and (max-width: 1200px) and (min-width: 768px) {
  div.dataTables_wrapper div.row:last-child {
    justify-content: space-between; }
  div.dataTables_wrapper div.dataTables_paginate {
    float: right; }
    div.dataTables_wrapper div.dataTables_paginate ul.pagination {
      justify-content: center; } }

@media screen and (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_filter#users-contacts_filter {
    text-align: right; }
  div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
    display: block;
    text-align: center; }
    div.dataTables_wrapper div.dataTables_info ul.pagination, div.dataTables_wrapper div.dataTables_paginate ul.pagination {
      justify-content: center !important; } }

@media (max-width: 991.98px) {
  .dataTables_wrapper table {
    display: block;
    width: 100%;
    min-height: .01%;
    overflow-x: auto; } }

/*=========================================================================================
    File Name: vertical-menu-modern.scss
    Description: A calssic vertical modern style menu with expand and collops support. It support
    light & dark version, filpped layout, right side icons, native scroll and borders menu
    item seperation.
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
body.vertical-layout.vertical-menu-modern .main-menu .navigation > li > a > i {
  font-size: 1.2rem; }

body.vertical-layout.vertical-menu-modern .toggle-icon {
  margin-right: 1rem; }

@media (min-width: 576px) {
  body.vertical-layout.vertical-menu-modern.menu-flipped .main-menu {
    right: 0; } }

body.vertical-layout.vertical-menu-modern .navbar .navbar-brand {
  white-space: nowrap; }

body.vertical-layout.vertical-menu-modern .navbar .navbar-header .nav-toggle {
  position: absolute;
  right: 0; }

body.vertical-layout.vertical-menu-modern .main-menu {
  transition: 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden; }

body.vertical-layout.vertical-menu-modern.menu-expanded .navbar .navbar-header {
  float: left;
  width: 240px; }

body.vertical-layout.vertical-menu-modern.menu-expanded .navbar.navbar-brand-center .navbar-header {
  float: left;
  width: auto; }

body.vertical-layout.vertical-menu-modern.menu-expanded .navbar .navbar-container {
  margin-left: 240px; }

body.vertical-layout.vertical-menu-modern.menu-expanded .navbar .navbar-brand .brand-text {
  animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }

body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu {
  width: 240px; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation .navigation-header .feather.icon-minus {
    display: none; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation > li > a > i {
    margin-right: 12px;
    float: left; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation > li > a > i:before {
      font-size: 1.2rem; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation > li > a > span {
    animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }
    body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation > li > a > span.badge {
      position: absolute;
      right: 20px; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation li.has-sub > a:not(.mm-next):after {
    content: "\f105";
    font-family: 'FontAwesome';
    font-size: 1rem;
    display: inline-block;
    position: absolute;
    right: 20px;
    top: 10px;
    transform: rotate(0deg);
    transition: -webkit-transform 0.2s ease-in-out; }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation li.open > a:not(.mm-next):after {
    transform: rotate(90deg); }
  body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .main-menu-footer {
    width: 240px; }

body.vertical-layout.vertical-menu-modern.menu-expanded .content,
body.vertical-layout.vertical-menu-modern.menu-expanded .footer {
  margin-left: 240px; }

body.vertical-layout.vertical-menu-modern.menu-expanded .navbar-brand-center .content,
body.vertical-layout.vertical-menu-modern.menu-expanded .navbar-brand-center .footer {
  margin-left: 0; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header {
  float: left;
  width: 60px; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header .modern-nav-toggle {
    display: none; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header.expanded {
    width: 240px;
    z-index: 1000; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header.expanded .modern-nav-toggle {
      display: block; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header.expanded .navbar-brand .brand-text {
      animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-header .navbar-brand .brand-text {
    animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadeout; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar.navbar-brand-center .navbar-header {
  float: left;
  width: auto; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar.navbar-brand-center .navbar-brand .brand-text {
  animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-brand {
  padding: 15px 0px; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar .navbar-container {
  margin-left: 60px; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu {
  width: 60px;
  transition: 300ms ease all;
  backface-visibility: hidden;
  transform: translate3d(0, 0, 0); }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-footer {
    width: 60px; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-footer,
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-header .media-body .media-heading,
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-header .media-body .text-muted,
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-header .media-right {
    display: none; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .main-menu-header .media-body {
    opacity: 0; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .user-content {
    padding: 20px 10px; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation {
    overflow: visible; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li.navigation-header .feather.icon-minus {
      display: block;
      font-size: 1.2rem; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li.navigation-header span {
      display: none; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a {
      text-overflow: inherit; }
      body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a > span {
        animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadeout; }
        body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a > span.badge {
          float: none !important; }
      body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a i {
        margin-right: 12px;
        float: left; }
        body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a i:before {
          font-size: 1.2rem; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .mTSWrapper {
    overflow: visible; }
  body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded {
    width: 240px; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation > li.navigation-header .feather.icon-minus {
      display: none; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation > li.navigation-header span {
      display: block; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation > li > a > span {
      animation: 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadein; }
      body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation > li > a > span.badge {
        position: absolute;
        right: 20px; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation li.has-sub > a:not(.mm-next):after {
      content: "\f105";
      font-family: 'FontAwesome';
      font-size: 1rem;
      display: inline-block;
      position: absolute;
      right: 20px;
      top: 10px;
      transform: rotate(0deg);
      transition: -webkit-transform 0.2s ease-in-out; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu.expanded .navigation li.open > a:not(.mm-next):after {
      transform: rotate(90deg); }

body.vertical-layout.vertical-menu-modern.menu-collapsed .content,
body.vertical-layout.vertical-menu-modern.menu-collapsed .footer {
  margin-left: 60px; }

body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar-brand-center .content,
body.vertical-layout.vertical-menu-modern.menu-collapsed .navbar-brand-center .footer {
  margin-left: 0; }

body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .content {
  margin: 0;
  margin-right: 60px; }

@media (min-width: 576px) {
  body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .main-menu {
    right: 0; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .main-menu span.menu-title {
      right: 60px; }
    body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .main-menu ul.menu-content {
      right: 60px;
      left: inherit; } }

body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .navbar .navbar-header {
  float: right; }

body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .navbar .navbar-container {
  margin: 0;
  margin-right: 60px; }

body.vertical-layout.vertical-menu-modern.menu-collapsed.menu-flipped .footer {
  margin: 0;
  margin-right: 60px; }

[data-textdirection="rtl"] body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li > a {
  padding: 14px 16px !important; }

[data-textdirection="rtl"] body.vertical-layout.vertical-menu-modern.menu-collapsed .main-menu .navigation > li.navigation-header .feather.icon-minus {
  padding: 12px 0px; }

[data-textdirection="rtl"] body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu .navigation li.has-sub > a:not(.mm-next):after {
  content: '\f104'; }

@media (min-width: 992px) {
  body.vertical-layout.vertical-menu-modern .main-menu {
    width: 240px; }
    body.vertical-layout.vertical-menu-modern .main-menu .navigation li.navigation-header .feather.icon-minus {
      display: none; }
  body.vertical-layout.vertical-menu-modern .navbar .navbar-header {
    width: 240px; }
  body.vertical-layout.vertical-menu-modern .content,
  body.vertical-layout.vertical-menu-modern .footer {
    margin-left: 240px; }
  body.vertical-layout.vertical-menu-modern.menu-flipped .content {
    margin: 0;
    margin-right: 240px; }
  body.vertical-layout.vertical-menu-modern.menu-flipped .navbar .navbar-header {
    float: right; }
  body.vertical-layout.vertical-menu-modern.menu-flipped .navbar .navbar-container {
    margin: 0;
    margin-right: 240px; }
  body.vertical-layout.vertical-menu-modern.menu-flipped .footer {
    margin: 0;
    margin-right: 240px; } }

@media (max-width: 991.98px) {
  body.vertical-layout.vertical-menu-modern .main-menu {
    width: 0; }
    body.vertical-layout.vertical-menu-modern .main-menu .navigation > li > a > span {
      animation: 0.1s cubic-bezier(0.25, 0.8, 0.25, 1) 0s normal forwards 1 fadeout; }
    body.vertical-layout.vertical-menu-modern .main-menu .navigation li.navigation-header span {
      display: none; }
  body.vertical-layout.vertical-menu-modern .navbar .navbar-header {
    width: 0; }
  body.vertical-layout.vertical-menu-modern .content,
  body.vertical-layout.vertical-menu-modern .footer {
    margin-left: 0; }
  body.vertical-layout.vertical-overlay-menu[data-menu="vertical-menu-modern"].boxed-layout.menu-open .main-menu {
    transform: translate3d(0, 0, 0);
    margin-left: 8px; } }

@media (max-width: 767.98px) {
  body.vertical-layout.vertical-menu-modern .main-menu {
    width: 0; }
  body.vertical-layout.vertical-menu-modern .navbar .navbar-header {
    width: 0; }
  body.vertical-layout.vertical-menu-modern .content,
  body.vertical-layout.vertical-menu-modern .footer {
    margin-left: 0; } }

@media screen and (max-width: 575px) {
  .vertical-overlay-menu[data-menu="vertical-menu-modern"].boxed-layout.menu-open .main-menu {
    transform: translate3d(0, 0, 0) !important;
    margin-left: 0 !important; } }

@keyframes fadein {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes fadeout {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
  body.vertical-menu-modern.vertical-layout .main-menu .navigation > li > a > span {
    animation: none; } }

/*=========================================================================================
  File Name: vertical-overlay-menu.scss
  Description: A overlay style vertical menu with show and hide support. It support 
  light & dark version, filpped layout, right side icons, native scroll and borders menu 
  item seperation.
  ----------------------------------------------------------------------------------------
  Item Name: Stack - Responsive Admin Theme
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
.vertical-overlay-menu .content {
  margin-left: 0; }

.vertical-overlay-menu .navbar .navbar-header {
  float: left;
  width: 240px; }

.vertical-overlay-menu .navbar.navbar-brand-center .navbar-header {
  float: left;
  width: auto; }

.vertical-overlay-menu .main-menu, .vertical-overlay-menu.menu-hide .main-menu {
  opacity: 0;
  transform: translate3d(0, 0, 0);
  transition: width .25s,opacity .25s,transform .25s;
  width: 240px;
  left: -240px; }
  .vertical-overlay-menu .main-menu .navigation .navigation-header .feather.icon-minus {
    display: none; }
  .vertical-overlay-menu .main-menu .navigation > li > a > i {
    font-size: 1.2rem;
    margin-right: 12px;
    float: left; }
    .vertical-overlay-menu .main-menu .navigation > li > a > i:before {
      transition: 200ms ease all; }
  .vertical-overlay-menu .main-menu .navigation li.has-sub > a:not(.mm-next):after {
    content: "\f105";
    font-family: 'FontAwesome';
    font-size: 1rem;
    display: inline-block;
    position: absolute;
    right: 20px;
    top: 10px;
    transform: rotate(0deg);
    transition: -webkit-transform 0.2s ease-in-out; }
  .vertical-overlay-menu .main-menu .navigation li.open > a:not(.mm-next):after {
    transform: rotate(90deg); }
  .vertical-overlay-menu .main-menu .main-menu-footer {
    bottom: 55px; }
  .vertical-overlay-menu .main-menu .main-menu-footer {
    width: 240px; }

.vertical-overlay-menu.menu-open .main-menu {
  opacity: 1;
  transform: translate3d(240px, 0, 0);
  transition: width .25s,opacity .25s,transform .25s; }

.vertical-overlay-menu.menu-flipped .main-menu {
  right: -240px;
  left: inherit; }

.vertical-overlay-menu.menu-flipped .navbar .navbar-container {
  margin: 0;
  margin-right: 240px; }

.vertical-overlay-menu.menu-flipped .navbar .navbar-header {
  float: right; }

.vertical-overlay-menu.menu-flipped.menu-open .main-menu {
  transform: translate3d(-240px, 0, 0); }

.vertical-overlay-menu footer.footer.fixed-bottom {
  z-index: 999; }

.vertical-overlay-menu.vertical-overlay-menu.boxed-layout.menu-open .main-menu {
  transform: translate3d(240px, 0, 0);
  margin-left: 7px; }

@media (max-width: 991.98px) {
  .vertical-overlay-menu .main-menu .main-menu-footer {
    bottom: 0px; } }

@media screen and (max-width: 575px) {
  .vertical-overlay-menu.boxed-layout.menu-open .main-menu {
    transform: translate3d(240px, 0, 0) !important;
    margin-left: 0 !important; } }

[data-textdirection="rtl"] body.vertical-layout.vertical-overlay-menu.menu-collapsed .main-menu .navigation > li > a {
  padding: 14px 16px !important; }

[data-textdirection="rtl"] body.vertical-layout.vertical-overlay-menu.menu-collapsed .main-menu .navigation > li.navigation-header .feather.icon-minus {
  padding: 12px 0px; }

[data-textdirection="rtl"] body.vertical-layout.vertical-overlay-menu .main-menu .navigation li.has-sub > a:not(.mm-next):after {
  content: '\f104'; }

[data-textdirection="rtl"] body.vertical-layout .knob-center-icon {
  margin-left: -99px; }

.bg-gradient-x-white .card-header, .bg-gradient-x-white .card-footer, .bg-gradient-y-white .card-header, .bg-gradient-y-white .card-footer, .bg-gradient-directional-white .card-header, .bg-gradient-directional-white .card-footer, .bg-gradient-radial-white .card-header, .bg-gradient-radial-white .card-footer, .bg-gradient-striped-white .card-header, .bg-gradient-striped-white .card-footer, .bg-gradient-x2-white .card-header, .bg-gradient-x2-white .card-footer, .bg-gradient-y2-white .card-header, .bg-gradient-y2-white .card-footer {
  background-color: transparent; }

.bg-gradient-x-black .card-header, .bg-gradient-x-black .card-footer, .bg-gradient-y-black .card-header, .bg-gradient-y-black .card-footer, .bg-gradient-directional-black .card-header, .bg-gradient-directional-black .card-footer, .bg-gradient-radial-black .card-header, .bg-gradient-radial-black .card-footer, .bg-gradient-striped-black .card-header, .bg-gradient-striped-black .card-footer, .bg-gradient-x2-black .card-header, .bg-gradient-x2-black .card-footer, .bg-gradient-y2-black .card-header, .bg-gradient-y2-black .card-footer {
  background-color: transparent; }

.bg-gradient-x-primary {
  background-image: linear-gradient(to right, #008385 0%, #00e7eb 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-primary {
  background-image: linear-gradient(to bottom, #008385 0%, #00e7eb 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-primary {
  background-image: linear-gradient(45deg, #008385, #00e7eb);
  background-repeat: repeat-x; }

.bg-gradient-x2-primary {
  background-image: linear-gradient(to right, #00e7eb, #00b5b8 50%, #06fbff);
  background-repeat: no-repeat; }

.bg-gradient-y2-primary {
  background-image: linear-gradient(#00e7eb, #00b5b8 50%, #06fbff);
  background-repeat: no-repeat; }

.bg-gradient-radial-primary {
  background-image: radial-gradient(circle, #008385, #00e7eb);
  background-repeat: no-repeat; }

.bg-gradient-striped-primary {
  background-image: linear-gradient(45deg, #06fbff 25%, transparent 25%, transparent 50%, #06fbff 50%, #06fbff 75%, transparent 75%, transparent); }

.bg-gradient-x-primary .card-header, .bg-gradient-x-primary .card-footer, .bg-gradient-y-primary .card-header, .bg-gradient-y-primary .card-footer, .bg-gradient-directional-primary .card-header, .bg-gradient-directional-primary .card-footer, .bg-gradient-radial-primary .card-header, .bg-gradient-radial-primary .card-footer, .bg-gradient-striped-primary .card-header, .bg-gradient-striped-primary .card-footer, .bg-gradient-x2-primary .card-header, .bg-gradient-x2-primary .card-footer, .bg-gradient-y2-primary .card-header, .bg-gradient-y2-primary .card-footer {
  background-color: transparent; }

.bg-gradient-x-secondary {
  background-image: linear-gradient(to right, #2c3648 0%, #546686 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-secondary {
  background-image: linear-gradient(to bottom, #2c3648 0%, #546686 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-secondary {
  background-image: linear-gradient(45deg, #2c3648, #546686);
  background-repeat: repeat-x; }

.bg-gradient-x2-secondary {
  background-image: linear-gradient(to right, #546686, #404e67 50%, #5d7296);
  background-repeat: no-repeat; }

.bg-gradient-y2-secondary {
  background-image: linear-gradient(#546686, #404e67 50%, #5d7296);
  background-repeat: no-repeat; }

.bg-gradient-radial-secondary {
  background-image: radial-gradient(circle, #2c3648, #546686);
  background-repeat: no-repeat; }

.bg-gradient-striped-secondary {
  background-image: linear-gradient(45deg, #5d7296 25%, transparent 25%, transparent 50%, #5d7296 50%, #5d7296 75%, transparent 75%, transparent); }

.bg-gradient-x-secondary .card-header, .bg-gradient-x-secondary .card-footer, .bg-gradient-y-secondary .card-header, .bg-gradient-y-secondary .card-footer, .bg-gradient-directional-secondary .card-header, .bg-gradient-directional-secondary .card-footer, .bg-gradient-radial-secondary .card-header, .bg-gradient-radial-secondary .card-footer, .bg-gradient-striped-secondary .card-header, .bg-gradient-striped-secondary .card-footer, .bg-gradient-x2-secondary .card-header, .bg-gradient-x2-secondary .card-footer, .bg-gradient-y2-secondary .card-header, .bg-gradient-y2-secondary .card-footer {
  background-color: transparent; }

.bg-gradient-x-success {
  background-image: linear-gradient(to right, #11a578 0%, #32eab2 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-success {
  background-image: linear-gradient(to bottom, #11a578 0%, #32eab2 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-success {
  background-image: linear-gradient(45deg, #11a578, #32eab2);
  background-repeat: repeat-x; }

.bg-gradient-x2-success {
  background-image: linear-gradient(to right, #32eab2, #16d39a 50%, #49ecbb);
  background-repeat: no-repeat; }

.bg-gradient-y2-success {
  background-image: linear-gradient(#32eab2, #16d39a 50%, #49ecbb);
  background-repeat: no-repeat; }

.bg-gradient-radial-success {
  background-image: radial-gradient(circle, #11a578, #32eab2);
  background-repeat: no-repeat; }

.bg-gradient-striped-success {
  background-image: linear-gradient(45deg, #49ecbb 25%, transparent 25%, transparent 50%, #49ecbb 50%, #49ecbb 75%, transparent 75%, transparent); }

.bg-gradient-x-success .card-header, .bg-gradient-x-success .card-footer, .bg-gradient-y-success .card-header, .bg-gradient-y-success .card-footer, .bg-gradient-directional-success .card-header, .bg-gradient-directional-success .card-footer, .bg-gradient-radial-success .card-header, .bg-gradient-radial-success .card-footer, .bg-gradient-striped-success .card-header, .bg-gradient-striped-success .card-footer, .bg-gradient-x2-success .card-header, .bg-gradient-x2-success .card-footer, .bg-gradient-y2-success .card-header, .bg-gradient-y2-success .card-footer {
  background-color: transparent; }

.bg-gradient-x-info {
  background-image: linear-gradient(to right, #1ab0c3 0%, #5ad9e9 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-info {
  background-image: linear-gradient(to bottom, #1ab0c3 0%, #5ad9e9 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-info {
  background-image: linear-gradient(45deg, #1ab0c3, #5ad9e9);
  background-repeat: repeat-x; }

.bg-gradient-x2-info {
  background-image: linear-gradient(to right, #5ad9e9, #2dcee3 50%, #71deec);
  background-repeat: no-repeat; }

.bg-gradient-y2-info {
  background-image: linear-gradient(#5ad9e9, #2dcee3 50%, #71deec);
  background-repeat: no-repeat; }

.bg-gradient-radial-info {
  background-image: radial-gradient(circle, #1ab0c3, #5ad9e9);
  background-repeat: no-repeat; }

.bg-gradient-striped-info {
  background-image: linear-gradient(45deg, #71deec 25%, transparent 25%, transparent 50%, #71deec 50%, #71deec 75%, transparent 75%, transparent); }

.bg-gradient-x-info .card-header, .bg-gradient-x-info .card-footer, .bg-gradient-y-info .card-header, .bg-gradient-y-info .card-footer, .bg-gradient-directional-info .card-header, .bg-gradient-directional-info .card-footer, .bg-gradient-radial-info .card-header, .bg-gradient-radial-info .card-footer, .bg-gradient-striped-info .card-header, .bg-gradient-striped-info .card-footer, .bg-gradient-x2-info .card-header, .bg-gradient-x2-info .card-footer, .bg-gradient-y2-info .card-header, .bg-gradient-y2-info .card-footer {
  background-color: transparent; }

.bg-gradient-x-warning {
  background-image: linear-gradient(to right, #ff864a 0%, #ffcab0 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-warning {
  background-image: linear-gradient(to bottom, #ff864a 0%, #ffcab0 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-warning {
  background-image: linear-gradient(45deg, #ff864a, #ffcab0);
  background-repeat: repeat-x; }

.bg-gradient-x2-warning {
  background-image: linear-gradient(to right, #ffcab0, #ffa87d 50%, #ffdbca);
  background-repeat: no-repeat; }

.bg-gradient-y2-warning {
  background-image: linear-gradient(#ffcab0, #ffa87d 50%, #ffdbca);
  background-repeat: no-repeat; }

.bg-gradient-radial-warning {
  background-image: radial-gradient(circle, #ff864a, #ffcab0);
  background-repeat: no-repeat; }

.bg-gradient-striped-warning {
  background-image: linear-gradient(45deg, #ffdbca 25%, transparent 25%, transparent 50%, #ffdbca 50%, #ffdbca 75%, transparent 75%, transparent); }

.bg-gradient-x-warning .card-header, .bg-gradient-x-warning .card-footer, .bg-gradient-y-warning .card-header, .bg-gradient-y-warning .card-footer, .bg-gradient-directional-warning .card-header, .bg-gradient-directional-warning .card-footer, .bg-gradient-radial-warning .card-header, .bg-gradient-radial-warning .card-footer, .bg-gradient-striped-warning .card-header, .bg-gradient-striped-warning .card-footer, .bg-gradient-x2-warning .card-header, .bg-gradient-x2-warning .card-footer, .bg-gradient-y2-warning .card-header, .bg-gradient-y2-warning .card-footer {
  background-color: transparent; }

.bg-gradient-x-danger {
  background-image: linear-gradient(to right, #ff425c 0%, #ffa8b4 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-danger {
  background-image: linear-gradient(to bottom, #ff425c 0%, #ffa8b4 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-danger {
  background-image: linear-gradient(45deg, #ff425c, #ffa8b4);
  background-repeat: repeat-x; }

.bg-gradient-x2-danger {
  background-image: linear-gradient(to right, #ffa8b4, #ff7588 50%, #ffc2ca);
  background-repeat: no-repeat; }

.bg-gradient-y2-danger {
  background-image: linear-gradient(#ffa8b4, #ff7588 50%, #ffc2ca);
  background-repeat: no-repeat; }

.bg-gradient-radial-danger {
  background-image: radial-gradient(circle, #ff425c, #ffa8b4);
  background-repeat: no-repeat; }

.bg-gradient-striped-danger {
  background-image: linear-gradient(45deg, #ffc2ca 25%, transparent 25%, transparent 50%, #ffc2ca 50%, #ffc2ca 75%, transparent 75%, transparent); }

.bg-gradient-x-danger .card-header, .bg-gradient-x-danger .card-footer, .bg-gradient-y-danger .card-header, .bg-gradient-y-danger .card-footer, .bg-gradient-directional-danger .card-header, .bg-gradient-directional-danger .card-footer, .bg-gradient-radial-danger .card-header, .bg-gradient-radial-danger .card-footer, .bg-gradient-striped-danger .card-header, .bg-gradient-striped-danger .card-footer, .bg-gradient-x2-danger .card-header, .bg-gradient-x2-danger .card-footer, .bg-gradient-y2-danger .card-header, .bg-gradient-y2-danger .card-footer {
  background-color: transparent; }

.bg-gradient-x-red {
  background-image: linear-gradient(to right, #D32F2F 0%, #E57373 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-red {
  background-image: linear-gradient(to bottom, #D32F2F 0%, #E57373 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-red {
  background-image: linear-gradient(45deg, #D32F2F, #E57373);
  background-repeat: repeat-x; }

.bg-gradient-x2-red {
  background-image: linear-gradient(to right, #E57373, #F44336 50%, #EF9A9A);
  background-repeat: no-repeat; }

.bg-gradient-y2-red {
  background-image: linear-gradient(#E57373, #F44336 50%, #EF9A9A);
  background-repeat: no-repeat; }

.bg-gradient-radial-red {
  background-image: radial-gradient(circle, #D32F2F, #E57373);
  background-repeat: no-repeat; }

.bg-gradient-striped-red {
  background-image: linear-gradient(45deg, #EF9A9A 25%, transparent 25%, transparent 50%, #EF9A9A 50%, #EF9A9A 75%, transparent 75%, transparent); }

.bg-gradient-x-red .card-header, .bg-gradient-x-red .card-footer, .bg-gradient-y-red .card-header, .bg-gradient-y-red .card-footer, .bg-gradient-directional-red .card-header, .bg-gradient-directional-red .card-footer, .bg-gradient-radial-red .card-header, .bg-gradient-radial-red .card-footer, .bg-gradient-striped-red .card-header, .bg-gradient-striped-red .card-footer, .bg-gradient-x2-red .card-header, .bg-gradient-x2-red .card-footer, .bg-gradient-y2-red .card-header, .bg-gradient-y2-red .card-footer {
  background-color: transparent; }

.bg-gradient-x-pink {
  background-image: linear-gradient(to right, #C2185B 0%, #F06292 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-pink {
  background-image: linear-gradient(to bottom, #C2185B 0%, #F06292 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-pink {
  background-image: linear-gradient(45deg, #C2185B, #F06292);
  background-repeat: repeat-x; }

.bg-gradient-x2-pink {
  background-image: linear-gradient(to right, #F06292, #E91E63 50%, #F48FB1);
  background-repeat: no-repeat; }

.bg-gradient-y2-pink {
  background-image: linear-gradient(#F06292, #E91E63 50%, #F48FB1);
  background-repeat: no-repeat; }

.bg-gradient-radial-pink {
  background-image: radial-gradient(circle, #C2185B, #F06292);
  background-repeat: no-repeat; }

.bg-gradient-striped-pink {
  background-image: linear-gradient(45deg, #F48FB1 25%, transparent 25%, transparent 50%, #F48FB1 50%, #F48FB1 75%, transparent 75%, transparent); }

.bg-gradient-x-pink .card-header, .bg-gradient-x-pink .card-footer, .bg-gradient-y-pink .card-header, .bg-gradient-y-pink .card-footer, .bg-gradient-directional-pink .card-header, .bg-gradient-directional-pink .card-footer, .bg-gradient-radial-pink .card-header, .bg-gradient-radial-pink .card-footer, .bg-gradient-striped-pink .card-header, .bg-gradient-striped-pink .card-footer, .bg-gradient-x2-pink .card-header, .bg-gradient-x2-pink .card-footer, .bg-gradient-y2-pink .card-header, .bg-gradient-y2-pink .card-footer {
  background-color: transparent; }

.bg-gradient-x-purple {
  background-image: linear-gradient(to right, #7B1FA2 0%, #BA68C8 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-purple {
  background-image: linear-gradient(to bottom, #7B1FA2 0%, #BA68C8 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-purple {
  background-image: linear-gradient(45deg, #7B1FA2, #BA68C8);
  background-repeat: repeat-x; }

.bg-gradient-x2-purple {
  background-image: linear-gradient(to right, #BA68C8, #9C27B0 50%, #CE93D8);
  background-repeat: no-repeat; }

.bg-gradient-y2-purple {
  background-image: linear-gradient(#BA68C8, #9C27B0 50%, #CE93D8);
  background-repeat: no-repeat; }

.bg-gradient-radial-purple {
  background-image: radial-gradient(circle, #7B1FA2, #BA68C8);
  background-repeat: no-repeat; }

.bg-gradient-striped-purple {
  background-image: linear-gradient(45deg, #CE93D8 25%, transparent 25%, transparent 50%, #CE93D8 50%, #CE93D8 75%, transparent 75%, transparent); }

.bg-gradient-x-purple .card-header, .bg-gradient-x-purple .card-footer, .bg-gradient-y-purple .card-header, .bg-gradient-y-purple .card-footer, .bg-gradient-directional-purple .card-header, .bg-gradient-directional-purple .card-footer, .bg-gradient-radial-purple .card-header, .bg-gradient-radial-purple .card-footer, .bg-gradient-striped-purple .card-header, .bg-gradient-striped-purple .card-footer, .bg-gradient-x2-purple .card-header, .bg-gradient-x2-purple .card-footer, .bg-gradient-y2-purple .card-header, .bg-gradient-y2-purple .card-footer {
  background-color: transparent; }

.bg-gradient-x-blue {
  background-image: linear-gradient(to right, #1976D2 0%, #64B5F6 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-blue {
  background-image: linear-gradient(to bottom, #1976D2 0%, #64B5F6 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-blue {
  background-image: linear-gradient(45deg, #1976D2, #64B5F6);
  background-repeat: repeat-x; }

.bg-gradient-x2-blue {
  background-image: linear-gradient(to right, #64B5F6, #2196F3 50%, #90CAF9);
  background-repeat: no-repeat; }

.bg-gradient-y2-blue {
  background-image: linear-gradient(#64B5F6, #2196F3 50%, #90CAF9);
  background-repeat: no-repeat; }

.bg-gradient-radial-blue {
  background-image: radial-gradient(circle, #1976D2, #64B5F6);
  background-repeat: no-repeat; }

.bg-gradient-striped-blue {
  background-image: linear-gradient(45deg, #90CAF9 25%, transparent 25%, transparent 50%, #90CAF9 50%, #90CAF9 75%, transparent 75%, transparent); }

.bg-gradient-x-blue .card-header, .bg-gradient-x-blue .card-footer, .bg-gradient-y-blue .card-header, .bg-gradient-y-blue .card-footer, .bg-gradient-directional-blue .card-header, .bg-gradient-directional-blue .card-footer, .bg-gradient-radial-blue .card-header, .bg-gradient-radial-blue .card-footer, .bg-gradient-striped-blue .card-header, .bg-gradient-striped-blue .card-footer, .bg-gradient-x2-blue .card-header, .bg-gradient-x2-blue .card-footer, .bg-gradient-y2-blue .card-header, .bg-gradient-y2-blue .card-footer {
  background-color: transparent; }

.bg-gradient-x-cyan {
  background-image: linear-gradient(to right, #0097A7 0%, #4DD0E1 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-cyan {
  background-image: linear-gradient(to bottom, #0097A7 0%, #4DD0E1 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-cyan {
  background-image: linear-gradient(45deg, #0097A7, #4DD0E1);
  background-repeat: repeat-x; }

.bg-gradient-x2-cyan {
  background-image: linear-gradient(to right, #4DD0E1, #00BCD4 50%, #80DEEA);
  background-repeat: no-repeat; }

.bg-gradient-y2-cyan {
  background-image: linear-gradient(#4DD0E1, #00BCD4 50%, #80DEEA);
  background-repeat: no-repeat; }

.bg-gradient-radial-cyan {
  background-image: radial-gradient(circle, #0097A7, #4DD0E1);
  background-repeat: no-repeat; }

.bg-gradient-striped-cyan {
  background-image: linear-gradient(45deg, #80DEEA 25%, transparent 25%, transparent 50%, #80DEEA 50%, #80DEEA 75%, transparent 75%, transparent); }

.bg-gradient-x-cyan .card-header, .bg-gradient-x-cyan .card-footer, .bg-gradient-y-cyan .card-header, .bg-gradient-y-cyan .card-footer, .bg-gradient-directional-cyan .card-header, .bg-gradient-directional-cyan .card-footer, .bg-gradient-radial-cyan .card-header, .bg-gradient-radial-cyan .card-footer, .bg-gradient-striped-cyan .card-header, .bg-gradient-striped-cyan .card-footer, .bg-gradient-x2-cyan .card-header, .bg-gradient-x2-cyan .card-footer, .bg-gradient-y2-cyan .card-header, .bg-gradient-y2-cyan .card-footer {
  background-color: transparent; }

.bg-gradient-x-teal {
  background-image: linear-gradient(to right, #00796B 0%, #4DB6AC 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-teal {
  background-image: linear-gradient(to bottom, #00796B 0%, #4DB6AC 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-teal {
  background-image: linear-gradient(45deg, #00796B, #4DB6AC);
  background-repeat: repeat-x; }

.bg-gradient-x2-teal {
  background-image: linear-gradient(to right, #4DB6AC, #009688 50%, #80CBC4);
  background-repeat: no-repeat; }

.bg-gradient-y2-teal {
  background-image: linear-gradient(#4DB6AC, #009688 50%, #80CBC4);
  background-repeat: no-repeat; }

.bg-gradient-radial-teal {
  background-image: radial-gradient(circle, #00796B, #4DB6AC);
  background-repeat: no-repeat; }

.bg-gradient-striped-teal {
  background-image: linear-gradient(45deg, #80CBC4 25%, transparent 25%, transparent 50%, #80CBC4 50%, #80CBC4 75%, transparent 75%, transparent); }

.bg-gradient-x-teal .card-header, .bg-gradient-x-teal .card-footer, .bg-gradient-y-teal .card-header, .bg-gradient-y-teal .card-footer, .bg-gradient-directional-teal .card-header, .bg-gradient-directional-teal .card-footer, .bg-gradient-radial-teal .card-header, .bg-gradient-radial-teal .card-footer, .bg-gradient-striped-teal .card-header, .bg-gradient-striped-teal .card-footer, .bg-gradient-x2-teal .card-header, .bg-gradient-x2-teal .card-footer, .bg-gradient-y2-teal .card-header, .bg-gradient-y2-teal .card-footer {
  background-color: transparent; }

.bg-gradient-x-yellow {
  background-image: linear-gradient(to right, #FBC02D 0%, #FFF176 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-yellow {
  background-image: linear-gradient(to bottom, #FBC02D 0%, #FFF176 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-yellow {
  background-image: linear-gradient(45deg, #FBC02D, #FFF176);
  background-repeat: repeat-x; }

.bg-gradient-x2-yellow {
  background-image: linear-gradient(to right, #FFF176, #FFEB3B 50%, #FFF59D);
  background-repeat: no-repeat; }

.bg-gradient-y2-yellow {
  background-image: linear-gradient(#FFF176, #FFEB3B 50%, #FFF59D);
  background-repeat: no-repeat; }

.bg-gradient-radial-yellow {
  background-image: radial-gradient(circle, #FBC02D, #FFF176);
  background-repeat: no-repeat; }

.bg-gradient-striped-yellow {
  background-image: linear-gradient(45deg, #FFF59D 25%, transparent 25%, transparent 50%, #FFF59D 50%, #FFF59D 75%, transparent 75%, transparent); }

.bg-gradient-x-yellow .card-header, .bg-gradient-x-yellow .card-footer, .bg-gradient-y-yellow .card-header, .bg-gradient-y-yellow .card-footer, .bg-gradient-directional-yellow .card-header, .bg-gradient-directional-yellow .card-footer, .bg-gradient-radial-yellow .card-header, .bg-gradient-radial-yellow .card-footer, .bg-gradient-striped-yellow .card-header, .bg-gradient-striped-yellow .card-footer, .bg-gradient-x2-yellow .card-header, .bg-gradient-x2-yellow .card-footer, .bg-gradient-y2-yellow .card-header, .bg-gradient-y2-yellow .card-footer {
  background-color: transparent; }

.bg-gradient-x-amber {
  background-image: linear-gradient(to right, #FFA000 0%, #FFD54F 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-amber {
  background-image: linear-gradient(to bottom, #FFA000 0%, #FFD54F 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-amber {
  background-image: linear-gradient(45deg, #FFA000, #FFD54F);
  background-repeat: repeat-x; }

.bg-gradient-x2-amber {
  background-image: linear-gradient(to right, #FFD54F, #FFC107 50%, #FFE082);
  background-repeat: no-repeat; }

.bg-gradient-y2-amber {
  background-image: linear-gradient(#FFD54F, #FFC107 50%, #FFE082);
  background-repeat: no-repeat; }

.bg-gradient-radial-amber {
  background-image: radial-gradient(circle, #FFA000, #FFD54F);
  background-repeat: no-repeat; }

.bg-gradient-striped-amber {
  background-image: linear-gradient(45deg, #FFE082 25%, transparent 25%, transparent 50%, #FFE082 50%, #FFE082 75%, transparent 75%, transparent); }

.bg-gradient-x-amber .card-header, .bg-gradient-x-amber .card-footer, .bg-gradient-y-amber .card-header, .bg-gradient-y-amber .card-footer, .bg-gradient-directional-amber .card-header, .bg-gradient-directional-amber .card-footer, .bg-gradient-radial-amber .card-header, .bg-gradient-radial-amber .card-footer, .bg-gradient-striped-amber .card-header, .bg-gradient-striped-amber .card-footer, .bg-gradient-x2-amber .card-header, .bg-gradient-x2-amber .card-footer, .bg-gradient-y2-amber .card-header, .bg-gradient-y2-amber .card-footer {
  background-color: transparent; }

.bg-gradient-x-blue-grey {
  background-image: linear-gradient(to right, #455A64 0%, #90A4AE 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-blue-grey {
  background-image: linear-gradient(to bottom, #455A64 0%, #90A4AE 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-blue-grey {
  background-image: linear-gradient(45deg, #455A64, #90A4AE);
  background-repeat: repeat-x; }

.bg-gradient-x2-blue-grey {
  background-image: linear-gradient(to right, #90A4AE, #607D8B 50%, #B0BEC5);
  background-repeat: no-repeat; }

.bg-gradient-y2-blue-grey {
  background-image: linear-gradient(#90A4AE, #607D8B 50%, #B0BEC5);
  background-repeat: no-repeat; }

.bg-gradient-radial-blue-grey {
  background-image: radial-gradient(circle, #455A64, #90A4AE);
  background-repeat: no-repeat; }

.bg-gradient-striped-blue-grey {
  background-image: linear-gradient(45deg, #B0BEC5 25%, transparent 25%, transparent 50%, #B0BEC5 50%, #B0BEC5 75%, transparent 75%, transparent); }

.bg-gradient-x-blue-grey .card-header, .bg-gradient-x-blue-grey .card-footer, .bg-gradient-y-blue-grey .card-header, .bg-gradient-y-blue-grey .card-footer, .bg-gradient-directional-blue-grey .card-header, .bg-gradient-directional-blue-grey .card-footer, .bg-gradient-radial-blue-grey .card-header, .bg-gradient-radial-blue-grey .card-footer, .bg-gradient-striped-blue-grey .card-header, .bg-gradient-striped-blue-grey .card-footer, .bg-gradient-x2-blue-grey .card-header, .bg-gradient-x2-blue-grey .card-footer, .bg-gradient-y2-blue-grey .card-header, .bg-gradient-y2-blue-grey .card-footer {
  background-color: transparent; }

.bg-gradient-x-grey-blue {
  background-image: linear-gradient(to right, #404E67 0%, #6F85AD 100%);
  background-repeat: repeat-x; }

.bg-gradient-y-grey-blue {
  background-image: linear-gradient(to bottom, #404E67 0%, #6F85AD 100%);
  background-repeat: repeat-x; }

.bg-gradient-directional-grey-blue {
  background-image: linear-gradient(45deg, #404E67, #6F85AD);
  background-repeat: repeat-x; }

.bg-gradient-x2-grey-blue {
  background-image: linear-gradient(to right, #6F85AD, #1B2942 50%, #B0BEC5);
  background-repeat: no-repeat; }

.bg-gradient-y2-grey-blue {
  background-image: linear-gradient(#6F85AD, #1B2942 50%, #B0BEC5);
  background-repeat: no-repeat; }

.bg-gradient-radial-grey-blue {
  background-image: radial-gradient(circle, #404E67, #6F85AD);
  background-repeat: no-repeat; }

.bg-gradient-striped-grey-blue {
  background-image: linear-gradient(45deg, #B0BEC5 25%, transparent 25%, transparent 50%, #B0BEC5 50%, #B0BEC5 75%, transparent 75%, transparent); }

.bg-gradient-x-grey-blue .card-header, .bg-gradient-x-grey-blue .card-footer, .bg-gradient-y-grey-blue .card-header, .bg-gradient-y-grey-blue .card-footer, .bg-gradient-directional-grey-blue .card-header, .bg-gradient-directional-grey-blue .card-footer, .bg-gradient-radial-grey-blue .card-header, .bg-gradient-radial-grey-blue .card-footer, .bg-gradient-striped-grey-blue .card-header, .bg-gradient-striped-grey-blue .card-footer, .bg-gradient-x2-grey-blue .card-header, .bg-gradient-x2-grey-blue .card-footer, .bg-gradient-y2-grey-blue .card-header, .bg-gradient-y2-grey-blue .card-footer {
  background-color: transparent; }

.dt-checkboxes-cell,
.dt-checkboxes-select-all {
  position: relative; }
  .dt-checkboxes-cell input::after, .dt-checkboxes-cell input::before,
  .dt-checkboxes-select-all input::after,
  .dt-checkboxes-select-all input::before {
    border-radius: 0.25rem;
    width: 1rem;
    height: 1rem;
    position: absolute;
    display: block;
    pointer-events: none;
    content: '';
    border: #adb5bd solid 1px; }
  .dt-checkboxes-cell input::before,
  .dt-checkboxes-select-all input::before {
    background-color: #ddd; }
  .dt-checkboxes-cell input:checked::before,
  .dt-checkboxes-select-all input:checked::before {
    color: #fff !important;
    border-color: #00b5b8 !important;
    background-color: #00b5b8 !important; }
  .dt-checkboxes-cell input:checked::after,
  .dt-checkboxes-select-all input:checked::after {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
    background-size: 8px;
    background-repeat: no-repeat;
    background-position: center; }

hr {
  margin-top: 0 !important; }

/************************* invoice list page**************************/
.table th,
.table td {
  border-top: none;
  white-space: nowrap !important; }

.dt-checkboxes {
  margin-left: 0.5rem; }

table.dataTable.no-footer {
  border-bottom: none !important; }

table.dataTable {
  width: 100% !important;
  margin-left: 0px !important;
  margin-right: 0px !important; }

.dataTables_length label select.custom-select {
  margin-left: 0.5rem;
  margin-right: 0.5rem; }

div.dataTables_wrapper
div.dataTables_paginate
.paginate_button {
  white-space: nowrap;
  text-align: center; }

div.dataTables_wrapper
div.dataTables_paginate .previous {
  overflow: hidden; }

/************************* invoice View page**************************/
.invoice-calculation .title {
  width: 10rem; }

.invoice-adress-info .info-title,
.invoice-total .amount {
  font-weight: 600; }

.issue-date .no-wrap,
.due-date .no-wrap {
  white-space: nowrap; }

/************************* invoice edit page**************************/
.pick-a-date {
  max-width: 130px; }

.payment-options {
  border-color: #babfc7 !important; }

.font-bold,
.item-price,
.each-cost .cost-value {
  font-weight: 600 !important; }

.dropdown-sizing {
  width: 20rem; }

.font-size-increase {
  font-size: 1.3rem;
  color: #626e82; }

.common-size {
  font-size: 1.2rem; }

@page {
  size: auto;
  margin: 0; }

@media print {
  .content-header {
    display: none; }
  .main-menu {
    display: none; }
  body {
    visibility: hidden; }
  .printable-content .card-body {
    visibility: visible; }
  .action-btns {
    display: none; }
  div.app-content.content {
    margin: 0 !important; }
  .buy-now {
    display: none; }
  .footer {
    display: none; } }
	</style>
</head>
<body>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- App invoice wrapper -->
            <section class="app-invoice-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12 printable-content" style="margin: auto;">
                        <!-- using a bootstrap card -->
                        <div class="card" id="print_section">
                            <!-- card body -->
                            <div class="card-body p-2">
                                <!-- card-header -->
                                <div class="card-header px-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="invoice-id font-weight-bold">Invoice# </span>
                                            <span>{{$invoice->invoice_id}}</span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <div class="issue-date pr-2">
                                                    <span class="font-weight-bold no-wrap">Issue Date: </span>
                                                    <span>{{date('d/m/Y', strtotime($invoice->created_at))}}</span>
                                                </div>
                                                <div class="due-date">
                                                    <span class="font-weight-bold no-wrap">DueDate: </span>
                                                    <span>{{$invoice->due_date}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- invoice logo and title -->
                                <div class="invoice-logo-title row py-2">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                        <h2 class="text-primary">Invoice</h2>
                                        <!-- <span>Software Development</span> -->
                                    </div>
                                    <!-- <div class="col-6 d-flex justify-content-end invoice-logo">
                                        <img src="../../../app-assets/images/logo/pixinvent-logo.png" alt="company-logo" height="46" width="164">
                                    </div> -->
                                </div>
                                <hr>

                                <!-- invoice address and contacts -->
                                <div class="row invoice-adress-info py-2">
                                    <div class="col-1"></div>
                                    <div class="col-5 mt-1 from-info">
                                        <div class="info-title mb-1">
                                            <span>Bill From</span>
                                        </div>
                                        <div class="company-address mb-1">
                                            <span class="text-muted">{{$patient->address}}</span>
                                        </div>
                                        <div class="company-email  mb-1 mb-1">
                                            <span class="text-muted">{{$patient->email}}</span>
                                        </div>
                                        <div class="company-phone  mb-1">
                                            <span class="text-muted">{{$patient->phone}}</span>
                                        </div>
                                    </div>
                                    <div class="col-5 mt-1 to-info">
                                        <div class="info-title mb-1">
                                            <span>Bill To</span>
                                        </div>
                                        <div class="company-name mb-1">
                                            <span class="text-muted">Pixinvent PVT.LTD</span>
                                        </div>
                                        <div class="company-address mb-1">
                                            <span class="text-muted">9205 Whitemarsh Street New York, NY 10002</span>
                                        </div>
                                        <div class="company-email mb-1">
                                            <span class="text-muted">hello@clevision.net</span>
                                        </div>
                                        <div class="company-phone  mb-1">
                                            <span class="text-muted">601-678-8022</span>
                                        </div>
                                    </div>
                                </div>

                                <!--product details table -->
                                <div class="product-details-table py-2 table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Service Name</th>
                                                <th scope="col">Doctor Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Price</th>
                                                <!-- <th scope="col">PRICE</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->getDoctor->name}}</td>
                                                <td>{{$service->getDepartment->name}}</td>
                                                <td class="font-weight-bold">KWD {{$service->price}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <hr>

                                <!-- invoice total -->
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mt-75">
                                            @if($invoice->show_payment_terms == 1)
                                            <p id="payment_terms" style="padding-left: 15px">Payment terms: {{$invoice->payment_terms}}</p>
                                            @endif
                                            @if($invoice->show_client_notes == 1)
                                            <p id="client_terms" style="padding-left: 15px">Client notes: {{$invoice->client_notes}}</p>
                                            @endif
                                        </div>
                                        <div class="col-12 col-sm-6 d-flex justify-content-end mt-75">
                                            <ul class="list-group cost-list">
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Subtotal </span>
                                                    <span class="cost-value">KWD {{$invoice->sub_total}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Discount </span>
                                                    <span class="cost-value">-KWD {{$invoice->total_discount}}</span>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Invoice Total </span>
                                                    <span class="cost-value">KWD {{$invoice->invoice_total}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Total Paid </span>
                                                    <span class="cost-value">-KWD {{$invoice->total_paid}}</span>
                                                </li>
                                                <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                    <span class="cost-title mr-2">Total Due </span>
                                                    <span class="cost-value">KWD {{$invoice->total_due}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
	
</body>
</html>