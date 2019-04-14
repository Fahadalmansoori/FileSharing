import autocomplete from 'autocomplete.js';
import algolia from 'algoliasearch';

let index = algolia('J5J7WG48NG', '1174d3203fb9db2aad5beb3fb8ec6307');

// create  method to autocomplete search
let SearchAuto = (tableName, inputName = '#search', hits = 5) => {
	index = index.initIndex(tableName);

	return autocomplete(inputName, { hint: true }, [
		{
			source: autocomplete.sources.hits(index, { hitsPerPage: hits }),
			displayKey: 'search',
			templates: {
				suggestion: function(suggestion) {
					//console.log(suggestion);
					//this is the HTML to be rendered
					return `
                <div class="card rounded ">
                    <div class="card-header">
                        <a class= "text-info"href=${route('module.page', {
							module: suggestion._highlightResult.id.value
						})}> <span class="card-title"> <strong class="text-mute"> Module: </strong>${suggestion
						._highlightResult.title.value}</span> <span class="badg badge-info float-right pr-2 pl-2">Year :
                                ${suggestion._highlightResult.year.value}</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href=${route('school.courses', {
							school: suggestion._highlightResult.school.id.value
						})}><span class="float-right">
                            School: ${suggestion._highlightResult.school.name.value}<span></a>

                      <a href ="${route('course.page', {
							course: suggestion._highlightResult.course.id.value
						})}">  <strong class="text-mute"> Course: </strong>  ${suggestion._highlightResult.course.title
						.value}</span><a>
                    </div>

                </div>`;
				}
			}
		}
	]);
};
export default SearchAuto;
