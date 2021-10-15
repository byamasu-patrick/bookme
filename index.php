 <?php include_once("helper/header.php");?>

 <header>
    <h1>Book Me! (BeMe)</h1>
  </header>
        <?php include_once("helper/navigation.php");?>
          <div class="col-9">
          <div class="caption v-middle text-center">
          <h1 class="cd-headline clip">
                  <span class="blc">I'm | </span>
                  <span class="cd-words-wrapper">
                    <b class="is-visible">Disciplined.</b>
                    <b>Organized.</b>
                    <b>Materializer.</b>
                  </span>
                </h1>
        </div>
            <div id="workplace" role="tabcontent">
                <div id="minimal-tabs">
                  <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Completed&nbsp;<span class="badge badge-success">'. $l .'</span></a></li>
                  <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Applied&nbsp;<span class="badge badge-danger">'. $a .'</span></a></li>
                  <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Requested&nbsp;<span class="badge badge-primary">'. $i .'</span></a></li>
                  </ul>
                   <?php include_once("helper/book_statistic.php");?>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                        <?php include_once("helper/tab_1_content.php");?>
                    </div>
                       <div class="tab-pane" role="tabpanel" id="tab-2">
                             <?php include_once("helper/tab_2_content.php"); ?>
                           <p><strong>Damascus</strong> (<a href="https://en.wikipedia.org/wiki/Arabic_language">Arabic</a>: دمشق‎‎ <em>Dimashq</em> <a href="https://en.wikipedia.org/wiki/Help:IPA_for_Arabic">[dɪˈmaʃq]</a>, <a href="https://en.wikipedia.org/wiki/Syrian_Arabic">Syrian</a>:
                                <a href="https://en.wikipedia.org/wiki/Help:IPA_for_Arabic">[dɪˈmɪʃeʔ]</a>) is the capital and likely the largest city of&nbsp;<a href="https://en.wikipedia.org/wiki/Syria">Syria</a>, following the decline in population
                                of&nbsp;<a href="https://en.wikipedia.org/wiki/Aleppo">Aleppo</a> due to the ongoing battle for the city. It is commonly known in Syria as&nbsp;<em>ash-Sham</em> (<a href="https://en.wikipedia.org/wiki/Arabic_language">Arabic</a>:
                                الشام‎‎ <em>ash-Shām</em>) and nicknamed as the&nbsp;<em>City of&nbsp;</em><a href="https://en.wikipedia.org/wiki/Jasmine"><em>Jasmine</em></a> (<a href="https://en.wikipedia.org/wiki/Arabic_language">Arabic</a>: مدينة
                                الياسمين‎‎ <em>Madīnat al-Yāsmīn</em>). In addition to being one of the&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_oldest_continuously_inhabited_cities">oldest continuously inhabited cities</a> in the world,
                                <a
                                    href="https://en.wikipedia.org/wiki/Damascus#cite_note-3">[3]</a> Damascus is a major cultural and religious centre of the&nbsp;<a href="https://en.wikipedia.org/wiki/Levant">Levant</a>. The city has an estimated population of 1,711,000 as of 2009.<a href="https://en.wikipedia.org/wiki/Damascus#cite_note-Syrian_Population-2">[2]</a>
                                                                        </p>


                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">

                            <h1>Where you plan your Success</h1>
                            <p style="color: rgb(74,103,116);">Planning is beleived to be one of the best tool to become successful.&nbsp;</p>
                            <?php include_once("helper/tab_3_content.php"); ?>

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("helper/footer.php");?>
