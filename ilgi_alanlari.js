async function getTRStandings() {
    const tableBody = document.querySelector('#sl-table tbody');
    
    const url = 'https://www.thesportsdb.com/api/v1/json/3/lookuptable.php?l=4339&s=2025-2026';

    try {
        const response = await fetch(url);
        const data = await response.json();
        
        if (!data.table) {
            tableBody.innerHTML = "<tr><td colspan='3'>Lig verisi bulunamadı.</td></tr>";
            return;
        }

        tableBody.innerHTML = ""; 

        
        data.table.forEach(team => {
           
            const teamLogo = team.strTeamBadge + "/preview";
            
            const row = `
                <tr>
                    <td>${team.intRank}</td>
                    <td>
                        <img src="${teamLogo}" width="25" height="25" class="me-2" onerror="this.src='https://via.placeholder.com/25?text=?'">
                        <strong>${team.strTeam}</strong>
                    </td>
                    <td>${team.intPoints}</td>
                </tr>`;
            tableBody.innerHTML += row;
        });

    } catch (error) {
        console.error("Hata:", error);
        tableBody.innerHTML = "<tr><td colspan='3'>Bağlantı hatası!</td></tr>";
    }
}

getTRStandings();

async function fillPremierLeague() {
    const tbody = document.querySelector('#pl-table tbody');
    
    const url = 'https://www.thesportsdb.com/api/v1/json/3/lookuptable.php?l=4328&s=2025-2026';

    try {
        const response = await fetch(url);
        const data = await response.json();
        
        if (data.table) {
            tbody.innerHTML = ""; 
            
            data.table.forEach(team => {
                tbody.innerHTML += `
                    <tr>
                        <td>${team.intRank}</td>
                        <td>
                            
                            <strong>${team.strTeam}</strong>
                        </td>
                        <td>${team.intPoints}</td>
                    </tr>`;
            });
        }
    } catch (error) {
        console.error("PL Hatası:", error);
        tbody.innerHTML = "<tr><td colspan='3'>Veri çekilemedi.</td></tr>";
    }
}


fillPremierLeague();
