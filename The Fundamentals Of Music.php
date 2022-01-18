<?php
    session_start();
    include 'includes\cfg.php';
    include 'includes\functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arpeggio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js\jquery-3.6.0.min.js" ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS\dist\WebStyle.css" rel="stylesheet"></head>
    <link href="CSS\dist\LMStyle.css" rel="stylesheet"></head>
<body>
    <div style="height: auto; width: 100%;">
        <?php
            include 'includes\nav.php';
            include 'includes\aside.php';
        ?>
        <div class="article">
        <div class="article-mid">
                <div class="MT-J">
                    <div class="MT-J-inside J-Container">
                        <div>
                            <h1>
                                The Fundamentals Of Music
                                </h1>
                                <h3 style="font-weight: lighter; font-size: 70%;">
                                    This basic music theory for beginner’s guide examines the core music fundamentals. It also provides insight into the basic building blocks of music that form harmony, melody, and rhythm.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="content" style="height: auto;">
                        <div class="content-container">
                            <div class="content-nav">
                                <ul>
                                    <li id="definition-C">
                                        <a id="definition" class="content-nav-link">Notes And Intervals</a>
                                    </li>
                                    <li id="how-C">
                                        <a id="how" class="content-nav-link">Scales And Modes</a>
                                    </li>
                                    <li id="why-C">
                                        <a id="why" class="content-nav-link">Chords And Extensions</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content-inside">
                                <div id="c-i-definition" class="c-i-div">
                                    <div class="c-i-title">
                                        <h1>
                                            Musical Notes And Intervals
                                        </h1>
                                    </div>
                                    <div class="c-i-main">
                                        <h3>
                                            The Music Alphabet?
                                        </h3>
                                        <br>
                                        <img src="images/Music-Alphabet.jpg" alt="Music Alphabet" class="c-i-img">  
                                        <p>
                                            Notes are the building blocks for all music. The musical alphabet consists of seven letters: A, B, C, D, E, F, G. Each note has a unique pitch.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            The 12 Keys Of Music
                                        </h4>
                                        <br>
                                        <p>
                                            There are 12 notes on the piano keyboard: <span>A, A#/B♭, B, C, C#/D♭, D, D#/E♭, E, F, F#/G♭, G, G#/A♭.</span> <br><br>
                                            The same 12 notes repeat upwards and downwards in octaves. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            White Keys
                                        </h4>
                                        <br>
                                        <p>
                                            The white keys on a piano play the “natural” notes in a scale: <span>A, B, C, D, E, F, G.</span> <br><br>
                                            Playing only white keys places you in either the key of C major or A minor. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Black Keys
                                        </h4>
                                        <br>
                                        <p>
                                            The black keys on a piano play the “flat” and “sharp” notes in a scale: <span>A#/B♭, C#/D♭, D#/E♭, F#/G♭, G#/A♭.</span> <br><br>
                                            Each note has a symbol: ♭ for flat and # for sharp. Playing a combination of white and black keys allows you to write in all available key signatures. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Intervals
                                        </h4>
                                        <br>
                                        <p>
                                            An interval is a distance between two notes. There are several intervals. Measure these intervals by the number of half steps, whole steps, and their position in the scale.<br>
                                            <ul class="c-i-ul">
                                                <li>
                                                    A half step interval is one semitone
                                                </li>
                                                <li>
                                                    A whole step interval is two semitones
                                                </li>
                                                <li>
                                                    Two half steps make a whole-step
                                                </li>
                                            </ul>
                                            <br>
                                            Intervals are also the foundation of both harmony and melody. Playing two or more notes at the same time creates harmonic intervals (chords). Playing single notes in a sequence makes melodic intervals (melodies).<br> <br>
                                            Furthermore, we describe intervals by number (distance) and prefix (quality). The interval number represents the number of half-steps between two notes. These numbers are: <span>1st (unison), 2nd, 3rd, 4th, 5th, 6th, 7th, and 8th (octave).</span> <br> <br>
                                            Lastly, intervals have using a prefix to describe their quality. The five interval qualities are: <span>major (M), minor (m), perfect (P), augmented (A), and diminished (d).</span> <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Octaves
                                        </h4>
                                        <br>
                                        <p>
                                            Octaves are the next highest or lowest pitch of the same note. The interval between a note and a note double its frequency is an octave. For example, an octave up from C1 on a piano is C2. An octave down would be C0.<br> <br>
                                            There are 12 semitones in the octave. These pitches repeat in the same order throughout the range of human hearing.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Key Signatures
                                        </h4>
                                        <br>
                                        <p>
                                            Key signatures tell you what notes in a scale are sharp (♯) or flat (♭). There are twelve key signatures, each derived from the twelve available notes.<br> <br>
                                            Key signatures also help identify the key of a song, which is the tonal center. For example, a song in the key of A minor uses notes from the A minor scale.<br>
                                        </p>
                                    </div>
                                </div>
                                <div id="c-i-how" class="c-i-div">
                                    <div class="c-i-title">
                                        <h1>
                                            Music Scales And Notes
                                        </h1>
                                    </div>
                                    <div class="c-i-main">
                                        <h3>
                                            The Music Mode?
                                        </h3>
                                        <br>
                                        <p>
                                            Musical scales form the building blocks of music. Understanding musical scales and their functions is essential when learning basic music theory.<br>
                                            This section looks at the two most common scales, their scale degrees, and the seven music modes. <br>
                                        </p>
                                        <br>
                                        <img src="images/Musical-Modes-Chart.png" alt="Music Modes" class="c-i-img">
                                        <br>
                                        <h4>
                                            Music Scales
                                        </h4>
                                        <br>
                                        <p>
                                            A music scale is a set of notes within an octave arranged by their pitch. The ascending or descending interval relationships among the note pitches define each scale. Moreover, the notes from a scale form melodies and harmonies.<br><br>
                                            There are several types of scales. However, the two main types are the major scale and the minor scale. You can build both major and minor scales from any note. How you use them depends on the pattern of intervals you use. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Major Scales
                                        </h4>
                                        <br>
                                        <p>
                                            There are twelve possible natural major scales. Natural major scales are bright, uplifting, and happy sounding. <br>
                                            The seven notes in all major scales follow the same interval pattern: <span>W-W-H-W-W-W-H (whole-whole-half-whole-whole-whole-half).</span> <br><br>
                                        </p>
                                        <br>
                                        <h4>
                                            Minor Scales
                                        </h4>
                                        <br>
                                        <p>
                                            Natural minor scales are dark, sad, and emotional sounding. The seven notes in all minor scales follow the same interval pattern:<span>W-H-W-W-H-W-W (whole-half-whole-whole-half-whole-whole).</span> <br><br>
                                            There are twelve possible natural minor scales. In addition, there are three variations of the minor scale: natural, harmonic, and melodic. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Scale Degrees
                                        </h4>
                                        <br>
                                        <p>
                                            Each note of a scale has a specific name related to its function, called a scale degree. The name is the function, and a number indicates its position on the scale.<br> <br>
                                            There are seven scale degrees. These names apply to all major and minor scales. Learning more about these functions takes us into advanced music theory. For now, it’s good to know the names:<br>
                                            <ul class="c-i-ul">
                                                <li>
                                                    1st - <span>Tonic</span>
                                                </li>
                                                <li>
                                                    2nd - <span>Supertonic</span>
                                                </li>
                                                <li>
                                                    3rd - <span>MediantS</span>
                                                </li>
                                                <li>
                                                    4th - <span>Subdominant</span>
                                                </li>
                                                <li>
                                                    5th - <span>Dominant</span>
                                                </li>
                                                <li>
                                                    6th - <span>Submediant</span>
                                                </li>
                                                <li>
                                                    7th - <span>Leading Tone</span>
                                                </li>
                                            </ul>
                                            <br>
                                            Music can create and release tension. The function of a scale degree relates to the amount of tension created. It also helps you decide what note(s) should follow to resolve the tension.<br> <br>
                                            Moreover, remembering the different pitches in major and minor scales is difficult. Referring to the steps of the scale by numbers rather than notes makes it easier to remember.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Music Modes
                                        </h4>
                                        <br>
                                        <p>
                                            Musical modes are scales derived from a parent scale. There are seven music modes.<br> <br>
                                            Each mode is a slight variation of a scale. They use all the same notes and interval patterns as the parent scale.<br><br>
                                            The main difference is the root note used to build the scale. Starting a scale on a different note defines the tonal center, giving it distinct melodic characteristics.<br><br>
                                            The seven musical modes are: <br>
                                            <ul class="c-i-ul">
                                                <li>
                                                    i - <span>Ionian (major scale)</span>
                                                </li>
                                                <li>
                                                    ii - <span>Dorian (major scale starting on the 2nd degree)</span>
                                                </li>
                                                <li>
                                                    iii - <span>Phrygian (major scale starting on the 3rd degree)</span>
                                                </li>
                                                <li>
                                                    iv - <span>Lydian (major scale starting on the 4th degree)</span>
                                                </li>
                                                <li>
                                                    v - <span>Mixolydian (major scale starting on the 5th degree)</span>
                                                </li>
                                                <li>
                                                    vi - <span>Aeolian (natural minor scale or major scale starting on the 6th degree)</span>
                                                </li>
                                                <li>
                                                    vii - <span>Locrian (major scale starting on the 7th degree)</span>
                                                </li>
                                            </ul>
                                            <br>
                                            Learning musical modes goes beyond basic music theory and is more advanced. However, getting familiar with these terms and basic functions is helpful. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Counter Point
                                        </h4>
                                        <br>
                                        <p>
                                            Counterpoint is the relationship between two or more melody lines played at the same time. These melodies or voices work together to create pleasant-sounding harmonies.</span> <br><br>
                                            The melodies that create counterpoint are dependent on each other to create harmony. However, they are independent in rhythm and contour. <br>
                                        </p>
                                    </div>
                                </div>
                                <div id="c-i-why" class="c-i-div">
                                    <div class="c-i-title">
                                        <h1>
                                            Chords And Chord Extensions
                                        </h1>
                                    </div>
                                    <div class="c-i-main">
                                        <h3>
                                            Why Chords? And Which?
                                        </h3>
                                        <br>
                                        <p>
                                            Chords are the harmonious building blocks of music. They evoke emotion and provide the foundation for creating melodies.<br> <br>
                                            Knowing how to build chords and how they interact with each other is essential when learning music theory. This section looks at basic chord types, chord extensions, and inversions.<br>
                                        </p>
                                        <br>
                                        <img src="images/Chords.png" alt="Chords" class="c-i-img">  
                                        <br>
                                        <h4>
                                            Musical Chords
                                        </h4>
                                        <br>
                                        <p>
                                            A chord is a combination of two or more notes played at the same time. They’re built off a single starting note called the root.<br><br>
                                            You can create chords from all twelve notes. There are also four basic types of chords in music:<br>
                                            <ul class="c-i-ul">
                                                <li>
                                                    Major - <span>Has a major third and a perfect fifth above the root</span>
                                                </li>
                                                <li>
                                                    Minor - <span>Has a minor third and a perfect fifth above the root</span>
                                                </li>
                                                <li>
                                                    Diminished - <span>Has a minor third and a diminished fifth above the root</span>
                                                </li>
                                                <li>
                                                    Augmented - <span>Has a major third and an augmented fifth above the root</span>
                                                </li>
                                            </ul>
                                            The chords and chord progressions in a piece of music support or complement the melody. <br>
                                        </p>
                                        <br>
                                        <h4>
                                            Triad Chords
                                        </h4>
                                        <br>
                                        <p>
                                            The most basic chords are triads. A triad is a chord made of three notes. Triads have a root note, a third (four semitones above the root), and a perfect fifth (seven semitones above the root).<br><br>
                                            Triads are also the foundation for more complex chords. For example, you can create seventh and ninth cords by adding notes above a tried.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Seventh Chord
                                        </h4>
                                        <br>
                                        <p>
                                            A seventh chord adds a note above the basic triad. Seventh chords have a root note, a third, a perfect fifth, and a seventh.<br><br>
                                            <span>For example</span>, a C major seventh has the notes: C–E–G-B. There are also five main types of seventh chords: major, minor, dominant, diminished, and half-diminished.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Major Chord
                                        </h4>
                                        <br>
                                        <h5>"C Major Chord"</h5>
                                        <img src="images/C-Major.png" alt="CMaj" class="c-i-img" >
                                        <p>
                                            Major chords have a root note, a major third, and a perfect fifth. A chord with these three notes alone is a major triad.<br> <br>
                                            <span>For example</span>, a C major triad has the notes: C-E-G. You can also add notes to build more complex chords.<br> <br>
                                        </p>
                                        <h4>
                                            Minor Chord
                                        </h4>
                                        <br>
                                        <h5>"C Minor Chord"</h5>
                                        <img src="images/C-Minor.png" alt="CMin" class="c-i-img" >
                                        <p>
                                            Minor chords have a root note, a minor third, and a perfect fifth. A chord with these three notes alone is a minor triad.<br> <br>
                                            <span>For example</span>, a C minor triad has the notes C-E♭-G. You can also add notes to build more complex chords.<br> <br>
                                        </p>
                                        <h4>
                                            Diminished Chord
                                        </h4>
                                        <br>
                                        <h5>"C Diminished Chord"</h5>
                                        <img src="images/C-Dim.png" alt="CDim" class="c-i-img" >
                                        <p>
                                            Diminished chords sound tense, dissonant, and dramatic. They have a root note, minor third, and a diminished fifth (six semitones above the root).<br> <br>
                                            <span>For example</span>, a C diminished triad has the notes: C-E♭-G♭<br> <br>
                                        </p>
                                        <h4>
                                            Augmented Chord
                                        </h4>
                                        <br>
                                        <h5>"C Augmented Chord"</h5>
                                        <img src="images/C-Aug.png" alt="CAug" class="c-i-img" >
                                        <p>
                                            Augmented chords sound dissonant, unsettling, and mysterious. They have a root note, major third, and an augmented fifth (eight semitones above the root).<br> <br>
                                            <span>For example</span>, a C major triad has the notes: C-E-G. a C augmented triad has the notes: C–E–G#.<br> <br>
                                        </p>
                                        <h4>
                                            Chord Extensions
                                        </h4>
                                        <br>
                                        <p>
                                            Chord extensions are notes added to the basic triad beyond the seventh. These notes extend into the next octave. There are four chord extensions: the 9th, 11th, and 13th.<br> <br>
                                            Extended chords create a richer, more harmonically complex sound than basic major and minor triads. They also provide additional voice leading possibilities, which makes chord progressions sound more interesting.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Chord inversions
                                        </h4>
                                        <br>
                                        <p>
                                            Chord inversions are variations of the same chord. Transposing the bottom note in a chord to the next octave creates an inversion.<br> <br>
                                            There are two main chord inversions:<br>
                                            <ul class="c-i-ul">
                                                <li>
                                                    First Inversion - <span>Transposes the root note up one octave. The third of the triad becomes the bass note.</span>
                                                </li>
                                                <li>
                                                    Second Inversion - <span>Transposes the inverted triad again. The fifth of the triad becomes the bass note.</span>
                                                </li>
                                            </ul>
                                            Chord inversions add variation, excitement, and smoother transitions in chord progressions. The more notes a chord has, the more possible inversions.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Chord Progressions
                                        </h4>
                                        <br>
                                        <p>
                                            A chord progression or a harmonic progression is an ordered series of chords. Chord progressions support both the melody and the rhythm. They also provide the foundation for creating harmony and melody.<br><br>
                                            Moreover, the key determines the chords used in a progression. A progression can also consist of major and minor chords.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Roman Numeral Analysis
                                        </h4>
                                        <br>
                                        <p>
                                            Roman numerals indicate the chords in a progression. They identify the musical key and the root note for each chord. For example, “IV” means the chord is built on the fourth degree of a scale.<br><br>
                                            Uppercase Roman numerals represent major chords, while lowercase numerals represent minor chords. For example, a chord progression in the key of C major would look like<span> I-vi-IV-V (C-Am-F-G)</span>. <br><br>
                                            Delving deeper into this topic goes beyond basic music theory. However, it helps to introduce this numerical system.<br>
                                        </p>
                                        <br>
                                        <h4>
                                            Voice Leading
                                        </h4>
                                        <br>
                                        <p>
                                            Voice leading is the linear movement between melodic lines or voices to create a single musical idea. This technique focuses on the smooth movement of notes from one chord to the next using common sounding tones.<br><br>
                                            Voice leading also minimizes the vertical and horizontal transitions between notes in a chord progression or melody. These smaller moves sound more natural and pleasing.<br><br>
                                            When creating a chord progression, use harmonically related chords. They can share similar notes or have inversions to make the stepwise motion smoother. For example, a C major chord and an A minor chord both have the notes E and C.<br>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <?php
        include 'includes\footer.php';
    ?>
    <script src="js/WebScript.js"></script>

    <script>

        $('')

    </script>

    <script>
            $('.c-i-div').hide();
            $('#c-i-definition').show();
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#definition-C").delay(250).addClass("highlighted");
        $("#definition-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#definition-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-definition').show();
        });
        $("#how-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#how-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-how').show();
        });
        $("#why-C").on("click",function(){
            $(".content-nav>ul>li").removeClass("highlighted");
            $("#why-C").delay(250).addClass("highlighted");
            $('.c-i-div').hide();
            $('#c-i-why').show();
        });
    </script>
</body>
</html>