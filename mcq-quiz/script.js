function submitQuiz() {
  let name = document.getElementById("studentName").value;
  let score = 0;
  if (document.querySelector('input[name="q1"]:checked')?.value === "4") score++;
  if (document.querySelector('input[name="q2"]:checked')?.value === "Paris") score++;

  document.getElementById("result").innerText = `${name}, your score is: ${score}/2`;

  fetch("save_result.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ name, score })
  });
}
