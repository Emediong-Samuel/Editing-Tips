<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A value-packed technical writing checklist</title>
    <style>
        /* Add your CSS styles here for a cool interface */
    </style>
</head>
<body>
    <div class="container">
        <h1>Technical writing editing checklist</h1>
        <p>Greetings, My name is Emediong Samuel, and I am a technical writer. Recently, I came across these cool technical writing editing checklist written by Linda Ikechukwu and later decided to make something creative with it - this php web app. This is only a highlight of what she wrote. Feel free to click on "next tip" to uncover a treasure trove of valuable editing tips.</p>
        <div class="tip-box">
            <?php
            // Array of editing tips and explanations
            $editingTips = [
                "**Maintain consistency.**\n\nIf you start referring to a concept or tool using a particular term or style, use the same term/style to refer to the concept or tool throughout an article to avoid confusion.",
                "**Be wary of the word ‘ensure’.**\n\nI see 'ensure' all the time in drafts, even though it's a really strong word. If you say 'doing X ensures that Y will happen', you're saying that X guarantees Y will happen.",
                "**Reword sentences that start with ambiguous pronouns like ‘this, that, those,’ etc.**\n\nAmbiguous writing is any piece of writing in which the meaning of the writing isn’t exactly clear to the reader.",
                "**Address the reader directly with ‘You’.**\n\nI always clamor for technical documents to write in the second person, using you to address the user directly.",
                "**Avoid the use of auxiliary verbs like ‘will, has, would, could, shall,’ etc., and its ‘to be’ variants.**\n\nThe use of such auxiliary verbs in sentences creates doubt and clunkiness.",
                "**Cut out unnecessary prepositions.**\n\nYour sentences would still convey exact meaning without them.",
                "**Eliminate wordy introductory phrases.**\n\nYour sentences would still convey exact meaning without them.",
                "**Give concrete and specific instructions. Make sure to answer the ‘who, what, how’ of each instruction.**\n\nExample: - Contact your sister. (How should I contact her, and with what?) X",
                "**Remove ‘Of’ when it is used to show possession in sentences.**\n\nExample: - Design of the system → System design",
                "**Remove phrases like ‘who is’, ‘which is’, ‘that is’ …**\n\nExample: - The feature which is obsolete must be removed. → Remove the obsolete feature.",
                "**Have mercy on ‘So’.**\n\nThe word ‘So’ has to be one of the most abused words in the history of writing. Watch out for every occurrence of ‘so’ in your writing.",
                "**Use inline styles to offset important text.**\n\nStyling important text differently helps place better emphasis on them. For example, you can - Use bold for user interface elements, e.g Click **Save**",
                "**Eliminate repetition and redundancies.**\n\nRead each sentence and ask yourself if it introduces new information, ideas, or analysis. If it is simply restating old information, rewrite it or delete it."
            ];

            // Check if a tip is set in the URL
            $tipIndex = isset($_GET['tip']) ? intval($_GET['tip']) : 0;

            // Display the selected tip with a toggle icon
            $currentTip = explode("\n\n", $editingTips[$tipIndex]);
            echo "<h2>{$currentTip[0]}</h2>";
            echo "<p>{$currentTip[1]}</p>";

            // Calculate the index of the next tip
            $nextTipIndex = ($tipIndex + 1) % count($editingTips);

            // Create a link to the next tip
            echo "<div class='icon'>";
            echo "<a href='?tip={$nextTipIndex}'>Next Tip</a>";
            echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>

